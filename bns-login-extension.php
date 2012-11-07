<?php
/*
Plugin Name: BNS Login Extension
Plugin URI: https://github.com/Cais/bns-login-extension/
Description: A simple extension of the BNS Login plugin
Version: 0.1
Text Domain: bns-le
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Login Extension
 *
 * @package     BNS_Login_Extension
 * @link        https://github.com/Cais/bns-login-extension/
 * @version     0.1
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @since   0.1
 * @date    November 6, 2012
 */

/** Sanity check - is the plugin active? */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'bns-login/bns-login.php' ) ) {

    /** Change the text pointing to the dashboard */
    add_filter( 'bns_login_goto', function(){ return __( 'Site Admin', 'bns-le' ); } );

    /** Change the separator characters */
    add_filter( 'bns_login_separator', function(){ return ' >--< '; } );

    /** Change the login URL */
    // add_filter( 'bns_login_url', function(){ return 'http://edwardcaissie.com'; } );

} else {
    /** @var $exit_message string - Message to display if 'BNS Login' is not activated */
    $exit_message = __( 'BNS Login Extension requires the BNS Login Plugin to be activated. Please search for "BNS Login" under the Plugins > Add New menu; or, download from http://wordpress.org/extend/plugins/bns-login', 'bns-le' );
    exit ( $exit_message );
}