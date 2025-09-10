<?php
/**
 * @item Zender - Perfex CRM Plugin
 * @author Titan Systems <mail@titansystems.ph>
 */ 

class Perfex_Controller extends MVC_Controller
{
	public function index()
	{
        $this->header->allow(site_url);
        
		if(!$this->session->has("logged"))
			response(401);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        $this->cache->container("system.plugins");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getPlugins());
        endif;

        set_plugins($this->cache->getAll());

        set_logged($this->session->get("logged"));

        set_language(logged_language, logged_rtl);

        if(!is_admin)
            response(500, __("lang_response_invalid"));

        if(!defined("plugin_perfex"))
        	response(500, __("lang_response_invalid"));

        $this->smarty->assign([
        	"prefix" => plugin_perfex["perfex_prefix"],
        	"name" => plugin_perfex["name"],
        	"desc" => plugin_perfex["desc"],
        	"author" => plugin_perfex["author"],
        	"author_uri" => plugin_perfex["author_uri"],
        	"site_name" => system_site_name,
        	"site_url" => str_replace("//", (system_protocol < 2 ? "http://" : "https://"), site_url)
        ]);

        $zender = $this->smarty->fetch("_plugins/perfex/zender.tpl");
        $sms_zender = $this->smarty->fetch("_plugins/perfex/sms_zender.tpl");

        $this->file->put("system/plugins/perfex/" . plugin_perfex["perfex_prefix"] . ".php", $zender);
        $this->file->put("system/plugins/perfex/libraries/Sms_" . plugin_perfex["perfex_prefix"] . ".php", $sms_zender);

        try {
            chmod("uploads/plugins/perfex.zip", 0755);
        } catch(Exception $e){
            // ignore
        }

        try {
            unlink("uploads/plugins/perfex.zip");
        } catch(Exception $e){
            // ignore
        }

        $archive = $this->zippy->create("uploads/plugins/perfex.zip", plugin_perfex["perfex_prefix"], "system/plugins/perfex");

        if($this->file->exists("system/plugins/perfex/" . plugin_perfex["perfex_prefix"] . ".php"))
            unlink("system/plugins/perfex/" . plugin_perfex["perfex_prefix"] . ".php");

        if($this->file->exists("system/plugins/perfex/libraries/Sms_" . plugin_perfex["perfex_prefix"] . ".php"))
            unlink("system/plugins/perfex/libraries/Sms_" . plugin_perfex["perfex_prefix"] . ".php");

		response(201, true, [
			"link" => site_url . "/uploads/plugins/perfex.zip?v=" . time()
		]);
	}
}