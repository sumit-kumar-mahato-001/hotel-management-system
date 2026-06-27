<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title ?? "Staff"; ?></title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="dashboard">
  <aside>
    <h2>Staff</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="checkin.php">Check In</a>
    <a href="checkout.php">Check Out</a>
    <a href="room-status.php">Room Status</a>
    <a href="customers.php">Customers</a>
    <a href="today-bookings.php">Today Bookings</a>
    <a href="logout.php">Logout</a>
  </aside>

  <main>
    <h1><?php echo $title ?? "Staff"; ?></h1>
    <div class="cards">
      <div class="card"><h3>Today Check-ins</h3><p>18</p></div>
      <div class="card"><h3>Check-outs</h3><p>11</p></div>
      <div class="card"><h3>Available Rooms</h3><p>24</p></div>
    </div>
  </main>
</div>
</body>
</html>
