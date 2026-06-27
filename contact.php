<?php $pageTitle = "Contact | Hotel Management System"; include "includes/header.php"; ?>

<section class="page">
  <h1>Contact Us</h1>
  <p><strong>Phone:</strong> <?php echo $hotelPhone; ?></p>
  <p><strong>Email:</strong> <?php echo $hotelEmail; ?></p>

  <form class="form" onsubmit="demoSubmit(event)">
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <textarea placeholder="Message" required></textarea>
    <button class="btn" type="submit">Send Message</button>
    <p id="formMsg"></p>
  </form>
</section>

<?php include "includes/footer.php"; ?>
