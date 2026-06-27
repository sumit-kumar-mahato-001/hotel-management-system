<?php $pageTitle = "Payment | Hotel Management System"; include "includes/header.php"; ?>

<section class="page">
  <h1>Payment</h1>
  <form class="form" onsubmit="demoSubmit(event)">
    <input type="text" placeholder="Booking ID" required>
    <input type="number" placeholder="Amount" required>
    <select required>
      <option>Cash</option>
      <option>UPI</option>
      <option>Card</option>
      <option>Bank Transfer</option>
    </select>
    <button class="btn" type="submit">Pay Now</button>
    <p id="formMsg"></p>
  </form>
</section>

<?php include "includes/footer.php"; ?>
