<?php
/**
 * Plugin Name: PS Expedia Affiliate Network API
 * Plugin URI: http://primordialsoup.ca
 * Description: Provides a front-end interface for the Expedia Affiliate Network - allowing users to book flights, cars, and hotels.
 * Version: 0.1
 * Author: Primordial Soup
 * Author URI: http://primordialsoup.ca
 * Contributors:
 *     Jaskaranjit Singh
 *     Daljit Singh
 *     Juan Mendiola
 *
 * License: GPLv3 or later
 * License URI: http://opensource.org/licenses/GPL-3.0
 */

/*
    Copyright (C) 2015 Primordial Soup

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


// disallow direct access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// start the session
session_start();


// include initialization
include plugin_dir_path( __FILE__ ).'init.php';
register_activation_hook( __FILE__ , 'psean_activate' );

// include plugin url rewrites
include plugin_dir_path( __FILE__ ).'rewrites.php';
register_activation_hook( __FILE__ , 'psean_rewrite_rules' );



// include classes
include plugin_dir_path( __FILE__ ).'classes/PS_EAN_API.php';

// include widget ui
include plugin_dir_path( __FILE__ ).'classes/PS_EAN_Widget.php';
add_action( 'widgets_init', function(){
     register_widget( 'PS_EAN_Widget' );
});


// include plugin options
include plugin_dir_path( __FILE__ ).'options.php';

