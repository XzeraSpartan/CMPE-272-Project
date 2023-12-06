<!DOCTYPE html>
<head>
<title>Servic - Services</title>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
  <h1 style="text-align: center;">Register</h1>
  
  <form action="registration.php" method="POST" autocomplete="off"  style="display: block;text-align: center;">
    <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" id="last_name" placeholder="Last Name" required><br><br>
    <input type="email" name="email" id ="email" placeholder="email address" required>
    <input type="password" name="password" id="password" placeholder="Password" required><br><br>
    <input type="text" name="home_phone" id="home_phone" placeholder="Home Phone Number" required>
    <input type="text" name="cell_phone" id="cell_phone" placeholder="Mobile Phone Number" required><br><br>
    <input type="text" name="home_address" id="home_address" placeholder="Home Address" required><br><br>
    <input class="booking-button" type="submit" value="Submit">
  </form>
  <br>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
