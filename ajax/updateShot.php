<?php 
/*
 * Tatiana Kerick
 * PocketAD - Shot List Manager
 * Update the status of a shot
*/

$shot_id = $_GET['shot_id'];

if(isset($shot_id)) {
	$status = $_GET['status'];

	$db = new PDO("mysql:host=localhost; db-name=CameraMan", "root", "root");

	$query = "update shotList set status='$status' where id=" + $shot_id;

	while($obj = mysql_fetch_object($query)) {
		$arr[] = $obj; 
	}
	$json_response = json_encode($arr);
}


?>