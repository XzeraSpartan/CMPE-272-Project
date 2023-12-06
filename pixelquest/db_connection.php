<?php
$host = 'awseb-e-mqkjh4sph2-stack-awsebrdsdatabase-eb48nx7ruwvg.c9tmxhgbvc3q.us-west-1.rds.amazonaws.com';
$username = 'sahaj'; // Your database username
$password = '12345678'; // Your database password
$database = 'ebdb'; // Your database name
$port = 3306; // Default MySQL port

// Connect to MySQL
$link = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
?>