<?php
/*
  Plugin Name: Cheng donghui Custom Loginform
  Plugin URI: http://wordpress.org/extend/plugins/health-check/
  Description: custome logform
  Author: chengdh
  Version: 0.1-alpha
  Author URI: http://wordpress.org/extend/plugins/health-check/
  Text Domain: health-check
  Domain Path: /lang
  License: GPL2
 */
//define styles
function cdh_login_form_styles() {
  wp_register_style('cdh_login_form_styles',plugins_url('login_form.css',__FILE__));
  wp_enqueue_style('cdh_login_form_styles');
}
add_action('login_enqueue_scripts', 'cdh_login_form_styles');

function cdh_login_form_js() {
  //wp_register_script('jquery',"http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js");
  wp_register_script('cdh_login_form_js',plugins_url('login_form.js',__FILE__));

  wp_enqueue_script('jquery');
  wp_enqueue_script('cdh_login_form_js');
}

add_action('login_enqueue_scripts', 'cdh_login_form_js');
remove_action( 'login_init', 'send_frame_options_header' );
remove_action( 'admin_init', 'send_frame_options_header' );
