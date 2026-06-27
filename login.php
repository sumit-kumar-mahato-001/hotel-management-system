<?php $pageTitle = "Login | Hotel Management System"; include "includes/header.php"; ?>

<section class="auth">
  <h1>User Login</h1>
  <form class="form" onsubmit="demoSubmit(event)">
    <input type="email" placeholder="Email Address" required>
    <input type="password" placeholder="Password" required>
    <button class="btn" type="submit">Login</button>
    <p id="formMsg"></p>
  </form>
  <p>New user? <a href="register.php">Register here</a></p>
</section>

<?php include "includes/footer.php"; ?>
