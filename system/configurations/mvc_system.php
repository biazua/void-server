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

/**
 * Titan Systems API
 * 
 * @desc The main API endpoint for the system, this is where the system communicates with the our server for purchase validations
 */

define("titansys_api", "https://api.anycdn.link");

/**
 * Titan Systems CDN
 * 
 * @desc This endpoint is for the hosting server of demo assets, this is also where the built apks are stored
 * so your server can download them.
 */

define("titansys_cdn", "https://raw.anycdn.link");

/**
 * Titan Systems Echo
 * 
 * @desc This is the server for the socket commucation, this is primarily used for realtime dashboard
 * updates only such as notifications, device status and UI refresh.
 */

define("titansys_echo", "https://echo.anycdn.link");