<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: /login.php');
    exit();
}

$productID = 48;

// MOST VIEWED COOKIE

$mostViewedCookieName = 'product_view_count_' . $productID . '_' . md5($_SESSION['userid']);
$currentCount = isset($_COOKIE[$mostViewedCookieName]) ? intval($_COOKIE[$mostViewedCookieName]) : 0;
setcookie($mostViewedCookieName, $currentCount + 1, time() + (86400 * 30), "/");

// RECENTLY VIEWED COOKIE
// Construct the cookie name based on the user ID
$cookieName = 'recently_viewed_' . md5($_SESSION['userid']);
// Read the recently viewed products from the user-specific cookie
$recentlyViewed = isset($_COOKIE[$cookieName]) ? explode(',', $_COOKIE[$cookieName]) : [];
// Add the current product to the start of the list
array_unshift($recentlyViewed, $productID);
// Remove duplicates
$recentlyViewed = array_unique($recentlyViewed);
// Ensure we only store the top 5
$recentlyViewed = array_slice($recentlyViewed, 0, 5);
// Save the updated list back to the cookie
setcookie($cookieName, implode(',', $recentlyViewed), time() + (86400 * 30), "/"); // Cookie will expire after 30 days


// Global RECENTLY VIEWED COOKIE
// Construct the cookie name based on the user ID
$cookieName = 'global_recently_viewed_' . md5($_SESSION['userid']);
// Read the recently viewed products from the user-specific cookie
$recentlyViewed = isset($_COOKIE[$cookieName]) ? explode(',', $_COOKIE[$cookieName]) : [];
// Add the current product to the start of the list
array_unshift($recentlyViewed, $productID);
// Remove duplicates
$recentlyViewed = array_unique($recentlyViewed);
// Ensure we only store the top 5
$recentlyViewed = array_slice($recentlyViewed, 0, 5);
// Save the updated list back to the cookie
setcookie($cookieName, implode(',', $recentlyViewed), time() + (86400 * 30), "/"); // Cookie will expire after 30 days

//global MOST VIEWED COOKIE
$mostViewedCookieName = 'global_product_view_count_' . $productID . '_' . md5($_SESSION['userid']);
$currentCount = isset($_COOKIE[$mostViewedCookieName]) ? intval($_COOKIE[$mostViewedCookieName]) : 0;
setcookie($mostViewedCookieName, $currentCount + 1, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Servic - Makeup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Makeup</h1>
        <img src="images/makeup.png" alt="Makeup" class="imgsize">
        <p>Our makeup artists provide stunning transformations for any occasion. Let us enhance your natural beauty with our professional makeup services.</p>
    
<div class="booking-button-container">
    <a href="#" class="booking-button">Book Now</a>
</div>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>
