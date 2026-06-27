<?php
$pageTitle = "Room Details | Hotel Management System";
include "includes/header.php";
$room = $_GET["room"] ?? "Deluxe Room";
?>

<section class="page">
  <h1><?php echo htmlspecialchars($room); ?></h1>
  <div class="details-box">
    <div class="room-img large"></div>
    <div>
      <p>This room includes comfortable bedding, attached bathroom, Wi-Fi, air conditioning, room service, and daily housekeeping.</p>
      <ul>
        <li>Free Wi-Fi</li>
        <li>Air Conditioning</li>
        <li>Room Service</li>
        <li>Attached Bathroom</li>
      </ul>
      <a href="booking.php?room=<?php echo urlencode($room); ?>" class="btn">Book This Room</a>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
