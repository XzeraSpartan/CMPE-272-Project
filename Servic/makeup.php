
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

    <?php
    // Cookie handling code
    $cookie_name = 'recently_visited';
    $current_service = basename(__FILE__, '.php'); // Get the current file name without extension

    // Check if the cookie exists
    if(isset($_COOKIE[$cookie_name])) {
        $recently_visited = explode(',', $_COOKIE[$cookie_name]);

        // If current service is already in the array, remove it
        if(($key = array_search($current_service, $recently_visited)) !== false) {
            unset($recently_visited[$key]);
        }

        // Prepend the current service to the beginning of the array
        array_unshift($recently_visited, $current_service);

        // Store only the last 5 services
        $recently_visited = array_slice($recently_visited, 0, 5);

        // Update the cookie
        setcookie($cookie_name, implode(',', $recently_visited), time() + (86400 * 30), "/"); // 86400 = 1 day
    } else {
        // Cookie doesn't exist, create a new one with the current service
        setcookie($cookie_name, $current_service, time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    ?>

    <?php include 'footer.php'; ?>
</body>
</html>
