<?php

/*
	Plugin Name: Category Email Notifications
	Plugin URI: https://github.com/lyandr/qa-category-email-notifications
	Plugin Description: Sends email for new questions, to users who favoritised the category where it was posted (support qa_external_users)
	Plugin Version: 0.1
	Plugin Date: 2019-11-18
	Plugin Author: Yann Langlois
	Plugin Author URI: 
	Plugin License: MIT License
	Plugin Minimum Question2Answer Version: 1.8.0
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

	qa_register_plugin_module('event', 'qa-category-email-notifications-event.php', 'qa_category_email_notifications_event', 'Category Email Notifications');


/*
        Omit PHP closing tag to help avoid accidental output
*/

