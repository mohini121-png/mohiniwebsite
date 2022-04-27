<?php
	$hostname = "localhost";
	$database = "ananya";
	$username = "root";
	$password = "";
    $mysql_link = mysql_connect("localhost", "root", "");   
    mysql_select_db("ananya") or die("Could not select database");
	$images_dir = "photos";
?>
r