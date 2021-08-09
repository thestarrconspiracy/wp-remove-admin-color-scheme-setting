<?php
/*
Plugin Name: Remove Admin Color Scheme Setting
Plugin URI:
Description: Disable the option to set a new admin color scheme in the user profile settings
Version:     1.0
Author:      Kyle Simmonds, The Starr Conspiracy
*/


function remove_admin_color_scheme() {
  global   $_wp_admin_css_colors;
  $_wp_admin_css_colors = 0;
}
add_action('admin_head', 'remove_admin_color_scheme');
