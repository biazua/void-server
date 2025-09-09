<?php
/**
 * Framework System Config
 * @package MVC Framework
 * @author Titan Systems <mail@titansystems.ph>
 */

/**
 * Project Configs
 * @warning Do not touch this part
 */

define("base_dir", "system/");
define("error_handler", 1);
define("site_url", "//" . env["siteurl"] . env["port"] . env["subdir"]);
define("system_token", env["systoken"]);
define("titansys_api", "https://api.anycdn.link");
define("titansys_cdn", "https://raw.anycdn.link");
define("titansys_echo", "https://echo.anycdn.link");