
<!DOCTYPE html>

<html>
<head>
<title>Servic - Services</title>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<?php include 'header.php'; ?>
<?php if (isset($_COOKIE['recently_visited'])): ?>
<div class="recently-visited">
<h2>Last Visited Services</h2>
<ul>
<?php
            $recently_visited = explode(',', $_COOKIE['recently_visited']);
            foreach ($recently_visited as $service_file) {
                // Convert the filename into a more readable format, e.g. ac_service => AC Service
                $service_name = str_replace('_', ' ', basename($service_file, '.php'));
                $service_name = ucwords($service_name);
                echo "<li><a href='{$service_file}.php'>{$service_name}</a></li>";
            }
            ?>
        </ul>
</div>
<?php endif; ?>
<div class="container">
<h1>Our Services</h1>
<div class="services-category">
    <h2>Home Appliance Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>AC Service</h3>
            <a href="ac_service.php"><img src="images/acservice.png" alt="AC Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Wash/Dryer Service</h3>
            <a href="washing_machine_service.php"><img src="images/washingmachine.png" alt="Washing Machine Service" class="cardimg"></a>
        </div>
    <div class="service-card">
        <h3>Refrigerator Service</h3>
        <a href="refrigerator_service.php"><img src="images/Fridge.png" alt="Fridge Service" class="cardimg"></a>
    </div>
</div>
</div>
<div class="services-category">
    <h2>Home Maintenance Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Plumbing Service</h3>
            <a href="plumbing_service.php"><img src="images/Plumbing.png" alt="Plumbing Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Electricity Service</h3>
            <a href="electricity_service.php"><img src="images/electricity.png" alt="Electricity Service" class="cardimg"></a>
        </a></div><div class="service-card">
            <h3>Washroom Cleaning</h3>
            <a href="washroom_cleaning.php"><img src="images/washroom.png" alt="Washroom Service" class="cardimg"></a>
        </div><div class="service-card">
            <h3>House Cleaning</h3>
            <a href="house_cleaning.php"><img src="images/HouseCleaning.png" alt="House Cleaning Service" class="cardimg"></a>
        </div>
    </div>
</div>
<div class="services-category">
    <h2>Personal Care Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Hair Cutting</h3>
            <a href="hair_cutting.php"><img src="images/haircut.png" alt="Haircut Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Makeup</h3>
            <a href="makeup.php"><img src="images/makeup.png" alt="makeup Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Massage</h3>
            <a href="massage.php"><img src="images/massage.png" alt="massage Service" class="cardimg"></a>
        </div>
    </div>
</div>
<div class="services-category">
    <h2>Vehicle Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Vehicle Service</h3>
            <a href="vehicle_service.php"><img src="images/Vehicleservice.png" alt="Vehicle Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Flat Tyre</h3>
            <a href="flat_tyre.php"><img src="images/Flattyre.png" alt="Flattyre Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Vehicle Towing</h3>
            <a href="vehicle_towing.php"><img src="images/Towing.png" alt="Towing Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Vehicle AC Repair</h3>
            <a href="vehicle_ac_repair.php"><img src="images/CarAc.png" alt="AC Repair Service" class="cardimg"></a>
        <div class="service-card">
            <h3>Other Vehicle Repair</h3>
            <a href="other_vehicle_repair.php"><img src="images/othervehicleservices.png" alt="Other Service" class="cardimg"></a>
        </div>
    </div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
