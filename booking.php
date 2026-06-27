<?php
$pageTitle = "Booking | Hotel Management System";
include "includes/header.php";
$room = $_GET["room"] ?? "";
?>

<section class="page">
  <h1>Book a Room</h1>

  <form class="form" onsubmit="demoSubmit(event)">
    <input type="text" placeholder="Full Name" required>
    <input type="email" placeholder="Email Address" required>
    <input type="tel" placeholder="Phone Number" required>

    <select required>
      <option value="">Select Room</option>
      <option <?php if($room=="Deluxe Room") echo "selected"; ?>>Deluxe Room</option>
      <option <?php if($room=="Executive Suite") echo "selected"; ?>>Executive Suite</option>
      <option <?php if($room=="Family Room") echo "selected"; ?>>Family Room</option>
    </select>

    <input type="date" required>
    <input type="date" required>
    <input type="number" min="1" placeholder="Number of Guests" required>

    <textarea placeholder="Special Request"></textarea>
    <button class="btn" type="submit">Submit Booking</button>
    <p id="formMsg"></p>
  </form>
</section>

<?php include "includes/footer.php"; ?>
