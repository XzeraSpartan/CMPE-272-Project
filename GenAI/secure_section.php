<?php
// Check for admin login
session_start();
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: index.php#login");
    exit;
}

// Read the registered users from the text file
$users = explode("\n", file_get_contents("users.txt"));

echo "<h2>Secure Section: Current Users</h2>";
foreach ($users as $user) {
    $user_details = explode("||", $user);
    if (count($user_details) >= 2) {
        list($stored_username, $stored_password) = $user_details;
        echo "<p>Username: " . $stored_username . "</p>";
    }
}
?>
