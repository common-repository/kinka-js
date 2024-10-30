<?php
/*
Plugin Name: kinka.js
Plugin URI: https://github.com/kinkajs/kinka.js
Description: Pretty zebra finches on your website.
Version: 1.0.0
Author: kinkajs
License: GPL2
*/

function kinkajs_enqueue_scripts() {
  wp_enqueue_script( 
    'kinkajs', 
    plugins_url('kinka.js',  __FILE__ )
  );
}

add_action( 'wp_enqueue_scripts', 'kinkajs_enqueue_scripts' );
?>