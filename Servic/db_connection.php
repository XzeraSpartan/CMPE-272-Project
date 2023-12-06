<?php
$host = 'awseb-e-h3kpttvvm9-stack-awsebrdsdatabase-k7rzqckk4gwy.ct0u8w2spvau.us-west-1.rds.amazonaws.com';
$username = 'naveen'; // Your database username
$password = '12345678'; // Your database password
$database = 'ebdb'; // Your database name
$port = 3306; // Default MySQL port

// Connect to MySQL
$link = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
else{
}
?>