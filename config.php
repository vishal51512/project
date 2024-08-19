
<?php 
session_start();

$siteUrl = 'http://'.$_SERVER['HTTP_HOST'].'/signup';
$SiteTitle = "Welcome to my project";

// Database Connection  

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'signup';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn) {
	die('Database connection Error!');
}

?>