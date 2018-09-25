<?php
function connectDB() {
## Database stuff
$db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$db_name = getenv('OPENSHIFT_MYSQL_DB_NAME');
	
global $db;
$db = mysqli_connect($db_host,$db_user,$db_pass);
	if (!$db) {
	die("Unable to connect to database");
	}
##if (!mysqli_select_db('spider')) {
if (!mysqli_select_db($db, $db_name)) {
		die("Unable to access database $db_name");
	}
}
?>
