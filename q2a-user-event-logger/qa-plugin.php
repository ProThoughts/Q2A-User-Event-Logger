<?php
/*
	Plugin Name: User Event Logger
	Plugin URI: 
	Plugin Description: Stores a record of activity related to each user
	Plugin Version: 1.0
	Plugin Date: 
	Plugin Author: 
	Plugin Author URI: 
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_module('event', 'qa-user-event-logger.php', 'qa_user_event_logger', 'User Event Logger');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/