<?php

/*
Plugin Name: Code Architect Facebook Footer Link
Plugin URI: http://codearchitect.in/
Description: Add a Facebook profile page link to the end of the posts
Version: 1.0
Author: Code-Architect
Author URI: http://codearchitect.in/
License: GPL2
*/

// Exit if accessed directly
if(!defined('ABSPATH'))
{
    exit;
}

// Load scripts from includes directory
require_once(plugin_dir_path(__FILE__) . "/includes/ca-scripts.php");

// Load content
require_once(plugin_dir_path(__FILE__) . "/includes/ca-content.php");

// Load settings if we are on the admin side
if(is_admin()) {
    require_once(plugin_dir_path(__FILE__) . "/includes/ca-settings.php");
}