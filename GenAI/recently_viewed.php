<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: login.php');
    exit();
}

$products = [
    1 => 'Neon Dream',
    2 => 'Cybernetic Pulse',
    3 => 'AI Revolution',
    4 => 'Neon Nomad',
    5 => 'Matrix Mirage',
    6 => 'HoloHood Vanguard',
    7 => 'CyberCore Cloak',
    8 => 'Synthwave Sentry',
    9 => 'Digital Drifter',
    10 => 'Quantum Quester',
    // ... up to Product 10
];

// Construct the cookie name based on the user ID
$cookieName = 'recently_viewed_' . md5($_SESSION['userid']);


// Read the recently viewed products from the user-specific cookie
$recentlyViewed = isset($_COOKIE[$cookieName]) ? explode(',', $_COOKIE[$cookieName]) : [];
?>
<!DOCTYPE html>
<!-- Rest of the HTML structure -->
<head>
    <Title>Recently Viewed</Title>
</head>
<h1>Recently Viewed Products</h1>
<ul>
<?php
foreach ($recentlyViewed as $productID) {
    echo '<li><a href="products/product' . $productID . '.php">' . $products[$productID] . '</a></li>';
}
?>
</ul>
