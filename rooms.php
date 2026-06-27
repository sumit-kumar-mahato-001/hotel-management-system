<?php $pageTitle = "Rooms | Hotel Management System"; include "includes/header.php"; ?>

<section class="page">
  <h1>Available Rooms</h1>
  <div class="rooms">
    <div class="room">
      <div class="room-img"></div>
      <h3>Deluxe Room</h3>
      <p>Comfortable room with modern facilities.</p>
      <strong>Rs 2499 / night</strong>
      <a href="room-details.php?room=Deluxe Room" class="btn-small">Details</a>
    </div>

    <div class="room">
      <div class="room-img"></div>
      <h3>Executive Suite</h3>
      <p>Premium suite with extra space and comfort.</p>
      <strong>Rs 4999 / night</strong>
      <a href="room-details.php?room=Executive Suite" class="btn-small">Details</a>
    </div>

    <div class="room">
      <div class="room-img"></div>
      <h3>Family Room</h3>
      <p>Perfect for families and group stays.</p>
      <strong>Rs 3299 / night</strong>
      <a href="room-details.php?room=Family Room" class="btn-small">Details</a>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
