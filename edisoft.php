<?php

/*
Plugin Name: Edisoft
Plugin URI: https://www.edisoft.de/home.html
Description: Die konsolidierte Investmentplattform
Version: 1.0
Author: Carlos Moran
Author URI:
License: GPLv2
*/


/*
*  Administration Menus
*/
require_once plugin_dir_path(__FILE__) . 'includes/admin_menu.php';

/*
* add Shortcode
*/
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';


/*
* add styles und scripts
*/
require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';


/*
* send data Tabelle
*/
require_once plugin_dir_path(__FILE__) . 'includes/response_tabelle.php';
