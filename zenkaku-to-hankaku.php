<?php
/*
Plugin Name: Zenkaku-to-Hankaku
Plugin URI: http://okuzawats.com/zenkaku-to-hankaku
Description: This plugin converts Zenkaku-characters (2-byte-characters) to Hankaku-character (1-bite-characters) in your post. Target characters are alphabets, numbers and space.
Author: okuzawats
Version: 2.0
Author URI: http://okuzawats.com/
*/

add_filter('the_title','zenkaku_to_hankaku_content_filter_to_title');
add_filter('the_content','zenkaku_to_hankaku_content_filter_to_content');

function zenkaku_to_hankaku_content_filter_to_title($title) {
	return mb_convert_kana($title,'as');
}

function zenkaku_to_hankaku_content_filter_to_content($content) {
	return mb_convert_kana($content,'as');
}
