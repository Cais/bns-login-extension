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
 * @link        http://buynowshop.com/plugins/
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
 */

add_filter( 'bns_login_goto', function(){ return 'Change site settings?'; } );
add_filter( 'bns_login_separator', function(){ return ' >--< '; } );