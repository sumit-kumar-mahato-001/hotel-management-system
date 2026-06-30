{
  "project": {
    "name": "The Grand Horizon Palace - Hotel Management System Homepage",
    "type": "Full-Stack Web Application (PHP + HTML/CSS/JS)",
    "description": "A luxury hotel homepage featuring dynamic room listings, a booking inquiry form, special offers, testimonials, newsletter subscription, and responsive design.",
    "version": "1.0",
    "author": "Your Name",
    "date": "2026-07-01"
  },
  "technology_stack": {
    "backend": "PHP 7+ (server-side logic, date handling, form processing, data arrays)",
    "frontend": "HTML5 (semantic structure), CSS3 (custom properties, grid, flexbox, animations), Vanilla JavaScript (DOM manipulation, events, smooth scroll)",
    "icons": "Font Awesome 6.5.1 (free solid & brand icons)",
    "fonts": "Google Fonts: Playfair Display, Inter, Cormorant Garamond",
    "images": "Unsplash (6 room images, 1 hero background)"
  },
  "file_structure": {
    "index.php": "Main page containing PHP logic and HTML markup",
    "indexpage.css": "Complete CSS stylesheet",
    "indexpage.js": "All client-side JavaScript"
  },
  "php_components": {
    "timezone": "Asia/Kolkata (set via date_default_timezone_set)",
    "dynamic_greeting": "Based on current hour: 'Good Morning' (before 12), 'Good Afternoon' (12-17), 'Good Evening' (after 17)",
    "today_date": "Formatted as 'l, d F Y' (e.g., Tuesday, 01 July 2026)",
    "rooms_array": {
      "count": 6,
      "fields": ["id", "name", "price (INR)", "image (Unsplash URL)", "capacity", "beds", "size", "amenities (array)", "rating (out of 5)"],
      "sample_room": {
        "id": 1,
        "name": "Deluxe Ocean Suite",
        "price": 15000,
        "image": "https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=600&h=400&fit=crop",
        "capacity": 2,
        "beds": "1 King Bed",
        "size": "45 m²",
        "amenities": ["Wi-Fi", "Ocean View", "Mini Bar", "Room Service", "Jacuzzi"],
        "rating": 4.9
      }
    },
    "special_offers_array": {
      "count": 3,
      "fields": ["title", "discount (percentage)", "description", "code"],
      "sample": {
        "title": "Early Bird Discount",
        "discount": "25%",
        "description": "Book 30 days in advance",
        "code": "EARLY25"
      }
    },
    "testimonials_array": {
      "count": 4,
      "fields": ["name", "location", "text", "rating (1-5)", "avatar (initials)"]
    },
    "booking_form_handling": {
      "method": "POST",
      "trigger": "isset($_POST['book_now'])",
      "validation": "checkin, checkout, room_type not empty",
      "success_message": "Thank you! Your booking inquiry for a [Room] from [Date] to [Date] has been received.",
      "error_message": "Please fill in all required fields."
    }
  },
  "html_sections": {
    "head": "Meta tags, title, description, Google Fonts, Font Awesome, custom CSS",
    "page_loader": "Full-screen overlay with animated logo and bar; hides after 800ms",
    "mobile_overlay": "Dark background for mobile menu backdrop",
    "toast_notification": "Fixed top-right container for temporary messages",
    "navbar": "Fixed, blurred, with logo, nav links (Home, Rooms, Amenities, Offers, Reviews, Contact, Book Now), and hamburger button",
    "hero": "Full-screen background image, gradient overlay, welcome badge, dynamic greeting, scroll-down indicator",
    "booking_widget": "Overlapping card with date inputs, guest selector, room dropdown (populated from PHP), submit button, alert message",
    "rooms_section": "Section header, grid of 6 room cards with image, badges, rating, details, amenities, price, and 'Book Now' button",
    "amenities_section": "Grid of 10 amenity items with icons (pool, spa, gym, dining, butler, wifi, parking, bar, business center, cabanas)",
    "offers_section": "Dark background, 3 offer cards with discount %, title, description, clickable promo code",
    "testimonials_section": "4 testimonial cards with star ratings, review text, avatar initials",
    "newsletter_section": "Email input and subscribe button",
    "footer": "4-column grid (about, links, contact, hours), social icons, copyright",
    "back_to_top": "Fixed round button (appears after scroll)",
    "newsletter_modal": "Hidden confirmation modal with checkmark, thank-you message"
  },
  "css_features": {
    "variables": "Custom properties for colors (gold shades, dark blue, grays), shadows, border radius, transition",
    "navbar": "Fixed, backdrop-blur, gold border-bottom, flex layout, hamburger hidden on desktop",
    "hero": "100vh, absolute overlay, gradient, animated badge and title (fadeInUp), bounceDown scroll indicator",
    "booking_widget": "Overlapping negative margin, grid form, focus ring effect, gold/dark button hover",
    "rooms_grid": "Responsive grid (minmax 340px), hover lift with shadow, image zoom, gold badges and tags",
    "amenities": "Grid (minmax 200px), icon circles with gold hover, card hover effect",
    "offers": "Dark background, glassmorphism cards, large gold discount, dashed code borders",
    "testimonials": "Card with border, italic text, custom avatar circles",
    "newsletter": "Flex form, rounded inputs, button hover color swap",
    "modal": "Full-screen overlay, opacity transition, centered card with close button, gold check icon",
    "footer": "Grid columns, circle social icons, gold hover",
    "back_to_top": "Fixed, visible on scroll, hover lift",
    "toast": "Slide-in from right, gold left border, auto-hide",
    "responsive_breakpoints": {
      "1024px": "Reduced room card min-width, 2-column booking form",
      "768px": "Hamburger visible, dropdown nav, single-column forms and rooms, 2-column footer",
      "480px": "Single-column footer, smaller room images, compact back-to-top button"
    }
  },
  "javascript_functions": {
    "page_loader": "Add 'hidden' class after 800ms on window load",
    "back_to_top": "Toggle 'visible' class based on scroll > 500px; smooth scroll to top",
    "mobile_menu": "Toggle active classes on hamburger, nav-links, and overlay; close on overlay click or link click; Escape key closes",
    "active_nav_link": "Click sets active class on current link, removes from others",
    "toast": "showToast(message) – shows message in toast for 3 seconds",
    "copy_code": "copyCode(code) – copies promo code to clipboard and shows toast",
    "select_room": "selectRoom(roomName) – sets dropdown value, scrolls to booking widget, shows toast",
    "newsletter": "handleNewsletter(e) – validates email, opens modal on success, toast on error; closeNewsletterModal() and outside-click handler",
    "booking_dates": "Check-in change updates check-out min date; prevents checkout before check-in",
    "smooth_scroll": "Prevent default on anchor links, use scrollIntoView smooth",
    "auto_hide_alert": "Hide booking alert after 6 seconds if present"
  },
  "external_resources": {
    "css": "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css",
    "fonts": "https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&display=swap"
  },
  "key_features": [
    "Dynamic content rendering from PHP arrays (rooms, offers, testimonials)",
    "Interactive booking inquiry form with server-side validation",
    "Smooth scrolling and anchor navigation",
    "Responsive layout with mobile dropdown menu",
    "Copy-to-clipboard promo codes",
    "Newsletter subscription with modal confirmation",
    "Scroll-to-top button",
    "Toast notifications for user actions",
    "CSS animations (fadeInUp, bounce, loader pulse)",
    "Custom properties for easy theme customization"
  ]
}
