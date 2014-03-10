<?php

/*
Plugin Name: WooCommerce IE Counties
Plugin URI: http://plugins.leewillis.co.uk/donate/
Description: A short plugin that adds Rep. of Ireland postal counties to WooCommerce's list of states.
Version: 1.0
Author: Lee Willis / Jasper Hampton
Author URI: http://plugins.leewillis.co.uk/
*/

/**
 * Copyright (c) 2014 Lee Willis. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


function  wc_ie_counties_add_counties( $states ) {
	$states['IE'] = array(
		'Carlow' => 'Carlow',
		'Cavan' => 'Cavan',
		'Clare' => 'Clare',
		'Cork' => 'Cork',
		'Donegal' => 'Donegal',
		'Dublin' => 'Dublin',
		'Galway' => 'Galway',
		'Kerry' => 'Kerry',
		'Kildare' => 'Kildare',
		'Kilkenny' => 'Kilkenny',
		'Laois' => 'Laois',
		'Leitrim' => 'Leitrim',
		'Limerick' => 'Limerick',
		'Longford' => 'Longford',
		'Louth' => 'Louth',
		'Mayo' => 'Mayo',
		'Meath' => 'Meath',
		'Monaghan' => 'Monaghan',
		'Offaly' => 'Offaly',
		'Roscommon' => 'Roscommon',
		'Sligo' => 'Sligo',
		'Tipperary' => 'Tipperary',
		'Waterford' => 'Waterford',
		'Westmeath' => 'Westmeath',
		'Wexford' => 'Wexford',
		'Wicklow' => 'Wicklow',
	);
	return $states;
}
add_filter( 'woocommerce_states', 'wc_ie_counties_add_counties' );
