// Page Loader hide after load
window.addEventListener('load', function() {
  setTimeout(function() {
    document.getElementById('pageLoader').classList.add('hidden');
  }, 800);
});

// Back to Top button
var backToTop = document.getElementById('backToTop');
window.addEventListener('scroll', function() {
  if (window.scrollY > 500) {
    backToTop.classList.add('visible');
  } else {
    backToTop.classList.remove('visible');
  }
});
backToTop.addEventListener('click', function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Mobile Menu
var hamburger = document.getElementById('hamburger');
var navLinks = document.getElementById('navLinks');
var mobileOverlay = document.getElementById('mobileOverlay');

hamburger.addEventListener('click', function() {
  hamburger.classList.toggle('active');
  navLinks.classList.toggle('active');
  mobileOverlay.classList.toggle('active');
});

mobileOverlay.addEventListener('click', closeMenu);

// Close menu when a link is clicked
var menuLinks = navLinks.querySelectorAll('a');
for (var i = 0; i < menuLinks.length; i++) {
  menuLinks[i].addEventListener('click', function() {
    if (navLinks.classList.contains('active')) {
      closeMenu();
    }
  });
}

function closeMenu() {
  hamburger.classList.remove('active');
  navLinks.classList.remove('active');
  mobileOverlay.classList.remove('active');
}

// Active nav link on click (simple)
for (var i = 0; i < menuLinks.length; i++) {
  menuLinks[i].addEventListener('click', function() {
    // Remove active class from all links
    for (var j = 0; j < menuLinks.length; j++) {
      menuLinks[j].classList.remove('active');
    }
    // Add active to clicked link
    this.classList.add('active');
  });
}

// Toast Notification
function showToast(message) {
  var toast = document.getElementById('toast');
  toast.textContent = message;
  toast.classList.add('show');
  setTimeout(function() {
    toast.classList.remove('show');
  }, 3000);
}

// Copy Offer Code
function copyCode(code) {
  navigator.clipboard.writeText(code).then(function() {
    showToast('Offer code copied: ' + code);
  }).catch(function() {
    showToast('Code: ' + code);
  });
}

// Select Room in Booking Form
function selectRoom(roomName) {
  var roomSelect = document.getElementById('room_type');
  for (var i = 0; i < roomSelect.options.length; i++) {
    if (roomSelect.options[i].value === roomName) {
      roomSelect.selectedIndex = i;
      break;
    }
  }
  document.getElementById('bookingWidget').scrollIntoView({ behavior: 'smooth' });
  showToast('Room selected: ' + roomName);
}

// Newsletter Form - open modal instead of toast
function handleNewsletter(e) {
  e.preventDefault();
  var emailInput = e.target.querySelector('input');
  var email = emailInput.value.trim();

  if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    document.getElementById('newsletterModalMsg').textContent =
      'We have sent a confirmation to ' + email + '. Check your inbox!';
    document.getElementById('newsletterModal').classList.add('active');
    emailInput.value = '';
  } else {
    showToast('Please enter a valid email address.');
  }
}

function closeNewsletterModal() {
  document.getElementById('newsletterModal').classList.remove('active');
}

// Close modal by clicking outside content
document.getElementById('newsletterModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeNewsletterModal();
  }
});

// Booking Date Validation
var checkinInput = document.getElementById('checkin');
var checkoutInput = document.getElementById('checkout');

checkinInput.addEventListener('change', function() {
  var checkinDate = new Date(checkinInput.value);
  var minCheckout = new Date(checkinDate);
  minCheckout.setDate(minCheckout.getDate() + 1);
  checkoutInput.min = minCheckout.toISOString().split('T')[0];

  if (new Date(checkoutInput.value) <= checkinDate) {
    checkoutInput.value = minCheckout.toISOString().split('T')[0];
  }
});

// Smooth scroll for anchor links
var allAnchors = document.querySelectorAll('a[href^="#"]');
for (var i = 0; i < allAnchors.length; i++) {
  allAnchors[i].addEventListener('click', function(e) {
    var targetId = this.getAttribute('href');
    if (targetId === '#') return;
    var target = document.querySelector(targetId);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
}

// Escape key closes mobile menu
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape' && navLinks.classList.contains('active')) {
    closeMenu();
  }
});

// Auto-hide booking alert if shown
var bookingAlert = document.getElementById('bookingAlert');
if (bookingAlert && bookingAlert.classList.contains('show')) {
  setTimeout(function() {
    bookingAlert.classList.remove('show');
  }, 6000);
}
