<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title ?? "Admin"; ?></title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="dashboard">
  <aside>
    <h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="rooms.php">Rooms</a>
    <a href="bookings.php">Bookings</a>
    <a href="customers.php">Customers</a>
    <a href="payments.php">Payments</a>
    <a href="reports.php">Reports</a>
    <a href="staff.php">Staff</a>
    <a href="logout.php">Logout</a>
  </aside>

  <main>
    <h1><?php echo $title ?? "Admin"; ?></h1>
    <div class="cards">
      <div class="card"><h3>Total Rooms</h3><p>42</p></div>
      <div class="card"><h3>Bookings</h3><p>128</p></div>
      <div class="card"><h3>Customers</h3><p>320</p></div>
      <div class="card"><h3>Revenue</h3><p>Rs 2,45,000</p></div>
    </div>
  </main>
</div>
</body>
</html>
