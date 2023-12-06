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

// MOST VIEWED
$viewCounts = [];
foreach ($products as $productID => $productName) {
    $cookieName = 'product_view_count_' . $productID . '_' . md5($_SESSION['userid']);
    $viewCounts[$productID] = isset($_COOKIE[$cookieName]) ? intval($_COOKIE[$cookieName]) : 0;
}

arsort($viewCounts);
$top5MostViewed = array_slice($viewCounts, 0, 5, true);
?>

<!DOCTYPE html>
<h1>Most Viewed Products by You</h1>
<ul>
<?php
foreach ($top5MostViewed as $productID => $viewCount) {
    echo '<li><a href="products/product' . $productID . '.php">' . $products[$productID] . '</a> (Views: ' . $viewCount . ')</li>';
}
?>
</ul>
</html>