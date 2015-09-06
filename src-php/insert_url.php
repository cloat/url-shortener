<?php
	include_once('mysql_database.php');
	include_once('short_url.php');
	
	$db = new mysql_database();
	$url = new short_url();
	
	$user_url = isset($_REQUEST['url']) ? $_REQUEST['url'] : '';
	
	
	$db->connect();
	$short_code = $url->insert($user_url);
	$db->close();
	
	
	echo $short_code;
?>