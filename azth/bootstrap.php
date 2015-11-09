<?php

include_once "defines.php";

//apc_clear_cache(); // clean apc

ini_set('display_errors','On');
ini_set('display_startup_errors',1);
error_reporting(-1);


$url=\thebuggenie\core\framework\Context::getRouting()->generate('asset_css', array('theme_name' => 'azth', 'css' => 'style.css'),true);
\thebuggenie\core\framework\Context::getResponse()->addStylesheet($url);