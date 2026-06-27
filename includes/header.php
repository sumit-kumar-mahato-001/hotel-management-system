<?php include_once __DIR__ . "/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? $siteName; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="header">
  <a href="index.php" class="logo">HotelMS</a>
  <button class="menu-btn" onclick="toggleMenu()">Menu</button>
  <nav id="nav">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="rooms.php">Rooms</a>
    <a href="booking.php">Booking</a>
    <a href="contact.php">Contact</a>
    <a href="login.php" class="btn-small">Login</a>
  </nav>
</header>
