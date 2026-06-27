// Script for Hotel Management System
function toggleMenu() {
  document.getElementById("nav").classList.toggle("show");
}

function demoSubmit(event) {
  event.preventDefault();
  const msg = document.getElementById("formMsg");
  if (msg) msg.textContent = "Submitted successfully. Database connection can be added next.";
}
