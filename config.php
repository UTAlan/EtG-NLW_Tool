<?php 
$debug = true;
session_start();
require_once("functions.php");
require_once("config.db.php"); // Specify $baseUrl, $db["username"], $db["password"], and $db["database"]
$db = new mysqli($db_config["hostname"], $db_config["username"], $db_config["password"], $db_config["database"]);

// Check Access Permission
$nlWriters = array(84);
$page["access"] = checkAccess($nlWriters);
if($page["access"] == 0 && !$debug) {
	header("Location: ../index.php");
	die('No Access.');
}