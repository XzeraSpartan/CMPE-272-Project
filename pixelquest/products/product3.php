<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: /login.php');
    exit();
}

$productID = 3;

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
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Title>God of War: Ragnarok</Title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="topnav">
    <a href="/index.php">
      <img src="/images/logo.png" alt="Pixel Quest Games">
    </a>
    <h2>God of War: Ragnarok</h2>
</div>
<div class="product">
    <img src="/images/godofwar.jpeg" alt="God of War: Ragnarok Cover Art">
    <h2>God of War: Ragnarok</h2>
    <p>
        Join Kratos and Atreus on a mythic journey for answers before Ragnarök arrives. 
        Together, father and son must put everything on the line as they journey to each of the 
        Nine Realms in God of War Ragnarök, the brutal and epic sequel in the action franchise.
    </p>
    <button class="buy-now">Buy Now</button>
</div>
</body>
</html>
