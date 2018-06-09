<?php
/*
Plugin Name: UpX_chatbot
Plugin URI: http://upxacadmey.com/
Description: An ed-tech platform powered by IT major Tech Mahindra, UpX Academy helps individuals and businesses move up in life by providing cutting edge training in Big Data, Data Analytics & Machine Learning.
Version: 1.0
Author: Nikhil Reddy
Author URI: http://upxacademy.com
License: GPL
*/
/* this calls hello_world() function when wordpress initializes.*/
/* note that the hello world doesn't have brackets.*/
function helloworld() {
include '\UpX_chatbot.php';
}
add_action( 'wp_footer', 'helloworld' );
?>
