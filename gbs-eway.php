<?php
/*
Plugin Name: Group Buying Payment Processor - eWay Direct Payments (beta)
Version: .01
Plugin URI: http://sproutventure.com/wordpress/group-buying
Description: eWay Direct Payments Add-on.
Author: Sprout Venture
Author URI: http://sproutventure.com/wordpress
Plugin Author: Dan Cameron
Contributors: Dan Cameron
Text Domain: group-buying
Domain Path: /lang
*/

add_action('gb_register_processors', 'gb_load_eway');

function gb_load_eway() {
	require_once('groupBuyingeWay.class.php');
}