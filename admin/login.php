<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<section class="auth">
  <h1>Admin Login</h1>
  <form class="form" onsubmit="demoSubmit(event)">
    <input type="email" placeholder="Admin Email" required>
    <input type="password" placeholder="Password" required>
    <button class="btn" type="submit">Login</button>
    <p id="formMsg"></p>
  </form>
</section>
<script src="../assets/js/script.js"></script>
</body>
</html>
