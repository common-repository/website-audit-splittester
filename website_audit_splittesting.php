<?php
/**
 * Plugin Name: Website Audit Splittesting 
 * Plugin URI: http://www.thewebsiteaudit.com/website-audit-splittesting-plugin/
 * Description: A split testing plugin, split test any element on your wordpress blog
 * Version: 0.1
 * Author: Peter Knight
 * Author URI: http://www.thewebsiteaudit.com
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
 
/* Add our function to the widgets_init hook. */

function custom_splittest(){
	global $variation;
	global $condition;
		$variations = 2;//adjust for multiple variations 
		$condition = 2;
		$variation = rand(1,$variations);//with two variations, this acts like a coin toss
		$tests= is_splittest($variation,$condition);
	return $variation;
}
add_action('wp_head','custom_splittest');

function is_splittest($conditionx) {//creates a conditional tag to use, wrap your code inside this tag and it will display if the output is true
	global $variation;
	if ( $conditionx == $variation ) {
		$is_splittest = True;
	}
	else {
		$is_splittest = False;
	}
	return $is_splittest;
}
add_action('wp_head','is_splittest');
?>