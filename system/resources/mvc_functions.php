<?php
/**
 * @desc Helper functions
 */

function get_configs($env = false, $ver = false)
{   
    if($env):
        if(!file_exists($env)):
            die("Environment config not found!");
        endif;

        $configs = explode("\n", file_get_contents($env));
    else:
        if(!file_exists("system/configurations/cc_env.inc")):
            die("Environment config not found!");
        endif;

        $configs = explode("\n", file_get_contents("system/configurations/cc_env.inc"));
    endif;

    foreach($configs AS $config):
        $line = explode("<=>", $config);
        $vals[$line[0]] = (isset($line[1]) ? trim($line[1]) : false);
    endforeach;

    $vals["siteurl"] = (isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : php_uname("n"));
    $vals["port"] = (in_array($_SERVER["SERVER_PORT"], [80, 443]) ? false : ":{$_SERVER["SERVER_PORT"]}");
    $vals["subdir"] = (empty(explode("/", dirname($_SERVER["SCRIPT_NAME"]))[1]) ? false : dirname($_SERVER["SCRIPT_NAME"]));

    define("env", $vals);

    if(!isset(env["installed"]) && strpos($_SERVER["REQUEST_URI"], "install") === false): 
        header("location: ./install");
    endif;    

    return get_version($ver);
}

function get_version($ver)
{
    if($ver):
        if(!file_exists($ver)):
            die("Version config not found!");
        endif;

        $version = file_get_contents($ver);
    else:
        if(!file_exists("system/configurations/cc_ver.inc")):
            die("Version config not found!");
        endif;

        $version = file_get_contents("system/configurations/cc_ver.inc");
    endif;

    return define("version", $version);
}

function site_url($path = false, $protocol = false)
{
    return $protocol ? str_replace("//", (system_protocol < 2 ? "http://" : "https://"), rtrim(site_url, "/")) . "/" . ltrim($path, "/") : site_url . "/{$path}";
}

function set_template($name)
{
    return define("template", $name);
}

function set_language($id, $rtl = 2)
{
    $GLOBALS["__"] = "__";
    $GLOBALS["___"] = "___";

    $rtl = $rtl ?: 2;

    $file = md5(is_null($id) ? 1 : $id);

    if(file_exists("system/languages/{$file}.lang")):
        $lines = explode("\n", file_get_contents("system/languages/{$file}.lang"));
    else:
        $lines = explode("\n", file_get_contents("system/storage/temporary/default.lang"));
    endif;

    $langStrings = [];

    foreach($lines as $line):
        if(strpos($line, "===") !== false):
            $columns = explode("===", trim($line));
            $langStrings["" . trim($columns[0])] = trim($columns[1]);            
        endif;
    endforeach;

    if(!isset($GLOBALS["language"])):
        $GLOBALS["language"] = $langStrings;
    endif;

    if(!defined("language_rtl"))
        define("language_rtl", $rtl < 2);

    return $langStrings;
}

function set_system($system)
{
    foreach($system as $key => $value):
        define("system_{$key}", $value);
    endforeach;
}

function set_logged($user = [])
{
    if(empty($user)):
        $user = [
            "id" => false,
            "admin" => false,
            "hash" => false,
            "email" => false,
            "name" => false,
            "rtl" => 2,
            "permissions" => false,
            "country" => false,
            "alertsound" => 2,
            "theme_color" => system_default_scheme,
            "timezone" => "asia/manila",
            "formatting" => []
        ];
    endif;

    date_default_timezone_set(
        $user["timezone"] ?: "UTC"
    );

    $user["language"] = isset($_SESSION["language"]) ? $_SESSION["language"] : (isset($_SESSION["logged"]["language"]) ? $_SESSION["logged"]["language"] : system_default_lang);

    $user["theme_color"] = isset($user["theme_color"]) && !empty($user["theme_color"]) ? $user["theme_color"] : system_default_scheme;

    $formatting = isset($user["formatting"]) && !empty($user["formatting"]) ? json_decode($user["formatting"], true) : [
        "clock" => "g:i A",
        "date" => "n/j/Y",
        "container" => [
            "clock_format" => 1,
            "date_format" => 1,
            "date_separator" => 2,
            "separator_selected" => "/"
        ]
    ];  

    $user["clock_format"] = $formatting["clock"];
    $user["date_format"] = $formatting["date"];

    $permissions = [
        "manage_users",
        "manage_roles",
        "manage_packages",
        "manage_vouchers",
        "manage_subscriptions",
        "manage_transactions",
        "manage_payouts",
        "manage_widgets",
        "manage_pages",
        "manage_marketing",
        "manage_languages",
        "manage_gateways",
        "manage_shorteners",
        "manage_plugins",
        "manage_templates",
        "manage_api"
    ];

    $permissionArray = [];

    $userPermissions = explode(",", is_null($user["permissions"]) ? "" : $user["permissions"]);
    
    if($user["id"] < 2):
        define("super_admin", true);
    else:
        define("super_admin", false);
    endif;

    if(!empty($user["permissions"]) || $user["id"] < 2):
        define("is_admin", true);
    else:
        define("is_admin", false);
    endif;

    foreach($user as $key => $value):
        define("logged_{$key}", $value);
    endforeach;

    define("logged_avatar", file_exists("uploads/avatars/" . $user["hash"] . ".jpg") ? site_url . "/uploads/avatars/" . $user["hash"] . ".jpg?v=" . filemtime("uploads/avatars/" . $user["hash"] . ".jpg") : site_url . "/uploads/avatars/noavatar.png");

    foreach($permissions as $permission):
        if(in_array($permission, $userPermissions)):
            $permissionArray["perm_{$permission}"] = true;
        endif;
    endforeach;

    define("permissions", $permissionArray);

    define("impersonate", isset($_SESSION["impersonate"]) ? $_SESSION["impersonate"] : false);
}

function set_plugins($plugins)
{
    $scripts = [];
    $styles = [];

    foreach($plugins as $plugin):
        $json_file = "system/plugins/installables/{$plugin["directory"]}/plugin.json";

        if(file_exists($json_file)):
            $plugin_data = json_decode(file_get_contents($json_file), true);
            if(isset($plugin_data["assets"])):
                foreach($plugin_data["assets"] as $asset):
                    $file_path = "system/plugins/installables/{$plugin["directory"]}/{$asset}";
                    if(file_exists($file_path)):
                        if(pathinfo($file_path, PATHINFO_EXTENSION) === "js"):
                            $scripts[] = "\"" . site_url . "/{$file_path}?v=" . md5($plugin_data["version"]) . "\"";
                        elseif(pathinfo($file_path, PATHINFO_EXTENSION) === "css"):
                            $styles[] = "\"" . site_url . "/{$file_path}?v=" . md5($plugin_data["version"]) . "\"";
                        endif;
                    endif;
                endforeach;
            endif;
        endif;
    endforeach;

    define("plugin_scripts", implode(",", $scripts));
    define("plugin_styles", implode(",", $styles));
}

function set_subscription($check, $package, $default)
{
    if(!defined("super_admin")):
        define("super_admin", false);
    endif;

    $subscription = [];

    if($check > 0):
        $subscription = $package ? $package : $default;
    else:
        if(system_freemodel < 2 || super_admin):
            $subscription = $default;
		endif;   
    endif;

    if(super_admin):
        $subscription["services"] = "sms,whatsapp,android_ussd,android_notifications,api,webhooks,templates,actions,ai";
    endif;

    if(!isset($subscription["services"])):
        $subscription["services"] = false;
    endif;

    return $subscription;
}

function __($lang)
{   
    return $GLOBALS["language"][$lang] ?? "lang_undefined";
}

function ___($string, $array = [])
{
    foreach($array as $key => $value):
        $string = str_replace("_888{$key}_", $value, $string);
    endforeach;

    return $string;
}

function __s($staticVar, $fallback = null)
{
    return defined($staticVar) ? constant($staticVar) : $fallback;
}

function _assets($path, $force = false)
{
    $isVersionedFile = strpos($path, ".js") !== false || strpos($path, ".css") !== false;
    $filePath = "templates/_assets/{$path}";
    $version = $force ? md5(filemtime($filePath)) : md5(version);

    return site_url . "/" . $filePath . ($isVersionedFile ? "?v={$version}" : "");
}

function assets($path, $template = template)
{
    $isVersionedFile = strpos($path, ".js") !== false || strpos($path, ".css") !== false;
    $filePath = "templates/{$template}/assets/{$path}";
    $version = md5(filemtime($filePath));

    return site_url . "/" . $filePath . ($isVersionedFile ? "?v={$version}" : "");
}

function response($status = 200, $msg = false, $data = false)
{
    return die(json_encode([
        "status" => (int) $status, 
        "message" => $msg, 
        "data" => $data
    ]));
}

function responseTable($data)
{
    return die(json_encode($data));
}

function get_image($type)
{
    switch($type):
        case "bg":
            return file_exists("uploads/theme/bg.png") ? site_url . "/uploads/theme/bg.png" : site_url . "/uploads/theme/default-bg.jpg";

            break;
        case "logo_light":
            return file_exists("uploads/theme/logo-light.png") ? site_url . "/uploads/theme/logo-light.png" : site_url . "/uploads/theme/default-logo-light.png";

            break;
        case "logo_dark":
            return file_exists("uploads/theme/logo-dark.png") ? site_url . "/uploads/theme/logo-dark.png" : site_url . "/uploads/theme/default-logo-dark.png";

            break;
        case "favicon":
            return file_exists("uploads/theme/favicon.png") ? site_url . "/uploads/theme/favicon.png" : site_url . "/uploads/theme/default-favicon.png";

            break;
        default:
            return false;
    endswitch;
}

function mail_title($title)
{
    return stripslashes(html_entity_decode($title, ENT_QUOTES, "UTF-8"));
}

function permission($permission)
{
    if(logged_id < 2):
        return true;
    else:
        if(isset(permissions["perm_{$permission}"]))
            return true;
        else
            return false;
    endif;
}

function limitation($limit, $used)
{
    if($limit < 1):
        return false;
    else:
        return $used >= $limit ? true : false;
    endif;
}

function footermark($state, $message, $mark)
{   
    if($state < 2 && !empty($mark)):
        return "{$message}\n\n{$mark}";
    else:
        return $message;
    endif;
}

function find($find, $string)
{
    return strpos($string, $find) !== false;
}

function rmrf($dir) 
{
    foreach (glob($dir) as $file):
        if(is_dir($file)):
            @rmrf("$file/*");
            @rmdir($file);
        else:
            @unlink($file);
        endif;
    endforeach;
}

function copyDirectory($src, $destination)
{  
    $dir = opendir($src);  

    @mkdir($destination);  
  
    while($file = readdir($dir)):
        if (($file != '.') && ($file != '..')):  
            if (is_dir("{$src}/{$file}")):
                @copyDirectory("{$src}/{$file}", "{$destination}/{$file}");  
            else: 
                @copy("{$src}/{$file}", "{$destination}/{$file}");  
            endif;
        endif;
    endwhile;
  
    closedir($dir); 
}  

function checkFile($filename, $directory)
{
    $files = @scandir($directory);

    if ($files !== false):
        foreach ($files as $entry):
            $basename = pathinfo($entry, PATHINFO_FILENAME);
            if ($basename == $filename):
                $extension = pathinfo($entry, PATHINFO_EXTENSION);
                return "{$basename}.{$extension}";
            endif;
        endforeach;
    else:
        return false;
    endif;

    return false;
}

function maskEmail($email)
{
    $mail_parts = explode("@", $email);
    $length = strlen($mail_parts[0]);
    $show = floor($length / 2);
    $hide = $length - $show;
    $replace = str_repeat("*", $hide);

    return substr_replace($mail_parts[0] , $replace , $show, $hide) . "@" . substr_replace($mail_parts[1], "***", 1, 3);
}

function formatMexicoNumWa($number)
{
    return substr_replace($number, '1', 3, 0);
}

function isPluginSchemaJsonValid($jsonString) {
    try {
        $data = json_decode($jsonString, true, JSON_THROW_ON_ERROR);
    } catch (Exception $e) {
        return false;
    }

    return true;
}

function encodeBraces($string)
{
    $string = str_replace("{", "<++", $string);
    $string = str_replace("}", "++>", $string);
    $string = str_replace("|", "<+>", $string);

    return $string;
}

function decodeBraces($string)
{
    $string = str_replace("<++", "{", $string);
    $string = str_replace("++>", "}", $string);
    $string = str_replace("<+>", "|", $string);

    return $string;
}

function countDays($date1, $date2) {
    $date1 = date_create($date1);
    $date2 = date_create($date2);
    $interval = date_diff($date1, $date2);
    $days = $interval->days;

    return $days;
}