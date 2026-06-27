<?php $pageTitle = "Register | Hotel Management System"; include "includes/header.php"; ?>

<section class="auth">
  <h1>Create Account</h1>
  <form class="form" onsubmit="demoSubmit(event)">
    <input type="text" placeholder="Full Name" required>
    <input type="email" placeholder="Email Address" required>
    <input type="password" placeholder="Password" required>
    <button class="btn" type="submit">Register</button>
    <p id="formMsg"></p>
  </form>
</section>

<?php include "includes/footer.php"; ?>
