<?php
	include_once('mysql_database.php');
	include_once('short_url.php');
	
	$db = new mysql_database();
	$url = new short_url();
	
	$user_short_url = isset($_GET['short_code']) ? $_GET['short_code'] : ''; //take the $short_code from the url using the .htaccess file
	
	
	$db->connect();
	$url->selectUrl($user_short_url);
	$db->close();
?>