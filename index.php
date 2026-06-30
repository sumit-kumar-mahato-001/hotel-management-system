<?php
date_default_timezone_set('Asia/Kolkata');

$rooms = [
    [
        'id' => 1,
        'name' => 'Deluxe Ocean Suite',
        'price' => 15000,
        'image' => 'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=600&h=400&fit=crop',
        'capacity' => 2,
        'beds' => '1 King Bed',
        'size' => '45 m²',
        'amenities' => ['Wi-Fi', 'Ocean View', 'Mini Bar', 'Room Service', 'Jacuzzi'],
        'rating' => 4.9
    ],
    [
        'id' => 2,
        'name' => 'Premium Garden View',
        'price' => 9500,
        'image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=600&h=400&fit=crop',
        'capacity' => 2,
        'beds' => '1 Queen Bed',
        'size' => '35 m²',
        'amenities' => ['Wi-Fi', 'Garden View', 'Coffee Maker', 'Room Service'],
        'rating' => 4.7
    ],
    [
        'id' => 3,
        'name' => 'Family Connecting Room',
        'price' => 18500,
        'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=600&h=400&fit=crop',
        'capacity' => 4,
        'beds' => '2 Queen Beds',
        'size' => '60 m²',
        'amenities' => ['Wi-Fi', 'Balcony', 'Kitchenette', '2 Bathrooms', 'Kids Area'],
        'rating' => 4.8
    ],
    [
        'id' => 4,
        'name' => 'Presidential Penthouse',
        'price' => 35000,
        'image' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=600&h=400&fit=crop',
        'capacity' => 2,
        'beds' => '1 Super King Bed',
        'size' => '85 m²',
        'amenities' => ['Private Pool', 'Butler Service', 'Panoramic View', 'Wine Cellar', 'Helipad Access'],
        'rating' => 5.0
    ],
    [
        'id' => 5,
        'name' => 'Executive Business Room',
        'price' => 11000,
        'image' => 'https://images.unsplash.com/photo-1591088398332-8a7791972843?w=600&h=400&fit=crop',
        'capacity' => 1,
        'beds' => '1 King Bed',
        'size' => '32 m²',
        'amenities' => ['Free Wi-Fi', 'Work Desk', 'Printer', 'Stationary Access', 'Conference Access', 'Lounge'],
        'rating' => 4.6
    ],
    [
        'id' => 6,
        'name' => 'Spa Retreat Suite',
        'price' => 22000,
        'image' => 'https://plus.unsplash.com/premium_photo-1663100126765-1ad02ca4ff69?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fHNwYXxlbnwwfHwwfHx8MA%3D%3D',
        'capacity' => 2,
        'beds' => '1 King Bed',
        'size' => '50 m²',
        'amenities' => ['Private Sauna', 'Massage Table', 'Aromatherapy', 'Yoga Terrace', 'Plunge Pool'],
        'rating' => 4.9
    ]
];

$booking_message = '';
$booking_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_now'])) {
    $checkin = $_POST['checkin'] ?? '';
    $checkout = $_POST['checkout'] ?? '';
    $guests = $_POST['guests'] ?? 1;
    $room_type = $_POST['room_type'] ?? '';

    if (!empty($checkin) && !empty($checkout) && !empty($room_type)) {
        $booking_success = true;
        $booking_message = "Thank you! Your booking inquiry for a <strong>" . htmlspecialchars($room_type) . "</strong> from <strong>" . date('d M Y', strtotime($checkin)) . "</strong> to <strong>" . date('d M Y', strtotime($checkout)) . "</strong> has been received. Our team will contact you shortly.";
    } else {
        $booking_message = "Please fill in all required fields.";
    }
}

$special_offers = [
    ['title' => 'Early Bird Discount', 'discount' => '25%', 'description' => 'Book 30 days in advance', 'code' => 'EARLY25'],
    ['title' => 'Weekend Getaway', 'discount' => '20%', 'description' => 'Friday to Sunday stays', 'code' => 'WEEKEND20'],
    ['title' => 'Extended Stay', 'discount' => '30%', 'description' => 'Stay 5+ nights', 'code' => 'STAY30'],
];

$testimonials = [
    ['name' => 'Priya Sharma', 'location' => 'Mumbai, India', 'text' => 'Absolutely stunning property! The Presidential Suite exceeded all expectations. The butler service was impeccable.', 'rating' => 5, 'avatar' => 'PS'],
    ['name' => 'James Anderson', 'location' => 'London, UK', 'text' => 'Best hotel experience in India. The ocean view from our suite was breathtaking. Will definitely return!', 'rating' => 5, 'avatar' => 'JA'],
    ['name' => 'Anita Desai', 'location' => 'Bangalore, India', 'text' => 'Perfect for our family vacation. The connecting rooms were spacious and the kids loved the pool area.', 'rating' => 4, 'avatar' => 'AD'],
    ['name' => 'Michael Chen', 'location' => 'Singapore', 'text' => 'Exceptional business facilities. The executive lounge made working remotely a pleasure.', 'rating' => 5, 'avatar' => 'MC'],
];

$current_hour = (int)date('H');
if ($current_hour < 12) {
    $greeting = 'Good Morning';
} elseif ($current_hour < 17) {
    $greeting = 'Good Afternoon';
} else {
    $greeting = 'Good Evening';
}

$today_date = date('l, d F Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Grand Horizon Palace - Luxury Hotel & Resort</title>
    <meta name="description" content="Experience unparalleled luxury at The Grand Horizon Palace. Book your dream stay with world-class amenities, ocean-view suites, and exceptional hospitality.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-loader" id="pageLoader">
        <div class="loader-inner">
            <div class="loader-logo">✦ GRAND HORIZON ✦</div>
            <div class="loader-bar">
                <div class="loader-bar-fill"></div>
            </div>
        </div>
    </div>

    <div class="mobile-overlay" id="mobileOverlay"></div>

    <div class="toast" id="toast"></div>

    <nav class="navbar" id="navbar">
        <div class="navbar-container">
            <a href="#" class="nav-logo">
                <i class="fa-solid fa-crown logo-icon"></i>Grand<span>Horizon</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#rooms">Rooms & Suites</a></li>
                <li><a href="#amenities">Amenities</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#testimonials">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#book" class="nav-btn">Book Now</a></li>
            </ul>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <section class="hero" id="home">
        <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=1600&h=900&fit=crop"
             alt="Luxury Hotel Exterior"
             class="hero-bg"
             loading="eager">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-badge">✦ Welcome to Paradise ✦</div>
            <h1 class="hero-title">Experience <span>Timeless</span> Luxury</h1>
            <p class="hero-subtitle">
                <?php echo $greeting; ?> — <?php echo $today_date; ?>. Discover unparalleled elegance at The Grand Horizon Palace, where every moment is crafted to perfection.
            </p>
        </div>
        <div class="hero-scroll-indicator" onclick="document.getElementById('bookingWidget').scrollIntoView({behavior:'smooth'})">
            <span></span>
        </div>
    </section>

    <div class="booking-widget" id="bookingWidget">
        <div class="booking-card" id="book">
            <h3><i class="fa-solid fa-calendar-check" style="color: var(--gold); margin-right: 8px;"></i>Reserve Your Stay</h3>
            <form class="booking-form" method="POST" action="#book" id="bookingForm">
                <div class="form-group">
                    <label>Check-In Date *</label>
                    <input type="date" name="checkin" id="checkin" required
                           min="<?php echo date('Y-m-d'); ?>"
                           value="<?php echo isset($_POST['checkin']) ? htmlspecialchars($_POST['checkin']) : date('Y-m-d', strtotime('+1 day')); ?>">
                </div>
                <div class="form-group">
                    <label>Check-Out Date *</label>
                    <input type="date" name="checkout" id="checkout" required
                           min="<?php echo date('Y-m-d', strtotime('+2 days')); ?>"
                           value="<?php echo isset($_POST['checkout']) ? htmlspecialchars($_POST['checkout']) : date('Y-m-d', strtotime('+3 days')); ?>">
                </div>
                <div class="form-group">
                    <label>Guests</label>
                    <select name="guests" id="guests">
                        <option value="1" <?php echo (isset($_POST['guests']) && $_POST['guests']=='1')?'selected':''; ?>>1 Guest</option>
                        <option value="2" <?php echo (isset($_POST['guests']) && $_POST['guests']=='2')?'selected':''; ?>>2 Guests</option>
                        <option value="3" <?php echo (isset($_POST['guests']) && $_POST['guests']=='3')?'selected':''; ?>>3 Guests</option>
                        <option value="4" <?php echo (isset($_POST['guests']) && $_POST['guests']=='4')?'selected':''; ?>>4 Guests</option>
                        <option value="5" <?php echo (isset($_POST['guests']) && $_POST['guests']=='5')?'selected':''; ?>>5+ Guests</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Room Preference</label>
                    <select name="room_type" id="room_type">
                        <option value="">Any Room Type</option>
                        <?php foreach($rooms as $room): ?>
                            <option value="<?php echo htmlspecialchars($room['name']); ?>"
                                <?php echo (isset($_POST['room_type']) && $_POST['room_type']==$room['name'])?'selected':''; ?>>
                                <?php echo htmlspecialchars($room['name']); ?> - ₹<?php echo number_format($room['price']); ?>/night
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" name="book_now" class="btn-submit">
                    <i class="fa-solid fa-magnifying-glass"></i> Availability
                </button>
            </form>
            <?php if (!empty($booking_message)): ?>
                <div class="booking-alert show <?php echo $booking_success ? 'success' : 'error'; ?>" id="bookingAlert">
                    <i class="fa-solid <?php echo $booking_success ? 'fa-circle-check' : 'fa-circle-exclamation'; ?>"></i>
                    <?php echo $booking_message; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <section class="section rooms-section" id="rooms">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Accommodations</span>
                <h2 class="section-title">Our Exquisite Rooms & Suites</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Each room is a sanctuary of comfort, designed with meticulous attention to detail and adorned with the finest furnishings.</p>
            </div>
            <div class="rooms-grid">
                <?php foreach($rooms as $room): ?>
                <div class="room-card">
                    <div class="room-card-image">
                        <img src="<?php echo $room['image']; ?>" alt="<?php echo htmlspecialchars($room['name']); ?>" loading="lazy">
                        <span class="room-card-badge">Bestseller</span>
                        <span class="room-card-rating">
                            <i class="fa-solid fa-star"></i> <?php echo $room['rating']; ?>
                        </span>
                    </div>
                    <div class="room-card-body">
                        <h3><?php echo htmlspecialchars($room['name']); ?></h3>
                        <div class="room-card-meta">
                            <span><i class="fa-solid fa-user"></i> <?php echo $room['capacity']; ?> Guests</span>
                            <span><i class="fa-solid fa-bed"></i> <?php echo $room['beds']; ?></span>
                            <span><i class="fa-solid fa-vector-square"></i> <?php echo $room['size']; ?></span>
                        </div>
                        <div class="room-amenities">
                            <?php foreach(array_slice($room['amenities'], 0, 3) as $amenity): ?>
                                <span class="room-amenity-tag"><?php echo htmlspecialchars($amenity); ?></span>
                            <?php endforeach; ?>
                            <?php if(count($room['amenities']) > 3): ?>
                                <span class="room-amenity-tag">+<?php echo count($room['amenities'])-3; ?> more</span>
                            <?php endif; ?>
                        </div>
                        <div class="room-card-footer">
                            <div class="room-price">
                                ₹<?php echo number_format($room['price']); ?> <small>/ night</small>
                            </div>
                            <a href="#book" class="btn-book" onclick="selectRoom('<?php echo htmlspecialchars($room['name']); ?>')">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section amenities-section" id="amenities">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">World-Class Facilities</span>
                <h2 class="section-title">Exceptional Amenities</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Indulge in our curated collection of premium amenities designed for your ultimate comfort and pleasure.</p>
            </div>
            <div class="amenities-grid">
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-water-ladder"></i></div>
                    <h4>Infinity Pool</h4>
                    <p>Panoramic ocean views</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-spa"></i></div>
                    <h4>Luxury Spa</h4>
                    <p>Rejuvenating treatments</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-dumbbell"></i></div>
                    <h4>Fitness Center</h4>
                    <p>24/7 state-of-the-art gym</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-utensils"></i></div>
                    <h4>Fine Dining</h4>
                    <p>3 Michelin-starred restaurants</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-bell-concierge"></i></div>
                    <h4>Butler Service</h4>
                    <p>Personalized 24/7 attention</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-wifi"></i></div>
                    <h4>High-Speed WiFi</h4>
                    <p>Complimentary throughout</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-car"></i></div>
                    <h4>Valet Parking</h4>
                    <p>Secure & convenient</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-martini-glass-citrus"></i></div>
                    <h4>Sky Lounge Bar</h4>
                    <p>Rooftop cocktails & views</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-business-time"></i></div>
                    <h4>Business Center</h4>
                    <p>Fully equipped workspace & meeting rooms</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon"><i class="fa-solid fa-person-swimming"></i></div>
                    <h4>Poolside Cabanas</h4>
                    <p>Private lounging with dedicated service</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section offers-section" id="offers">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag" style="color: rgba(200,164,92,0.9);">Limited Time</span>
                <h2 class="section-title">Exclusive Offers</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Take advantage of our seasonal promotions and enjoy incredible savings on your luxury stay.</p>
            </div>
            <div class="offers-grid">
                <?php foreach($special_offers as $offer): ?>
                <div class="offer-card">
                    <div class="offer-discount"><?php echo $offer['discount']; ?></div>
                    <h4><?php echo htmlspecialchars($offer['title']); ?></h4>
                    <p><?php echo htmlspecialchars($offer['description']); ?></p>
                    <span class="offer-code" onclick="copyCode('<?php echo $offer['code']; ?>')" title="Click to copy">
                        <?php echo $offer['code']; ?> <i class="fa-regular fa-copy"></i>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section testimonials-section" id="testimonials">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Guest Experiences</span>
                <h2 class="section-title">What Our Guests Say</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Real stories from guests who have experienced the magic of The Grand Horizon Palace.</p>
            </div>
            <div class="testimonials-grid">
                <?php foreach($testimonials as $testimonial): ?>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <?php for($i=0; $i<5; $i++): ?>
                            <i class="fa-solid fa-star" style="<?php echo $i<$testimonial['rating']?'':'opacity:0.3;'; ?>"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">"<?php echo htmlspecialchars($testimonial['text']); ?>"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><?php echo $testimonial['avatar']; ?></div>
                        <div class="testimonial-author-info">
                            <strong><?php echo htmlspecialchars($testimonial['name']); ?></strong>
                            <span><?php echo htmlspecialchars($testimonial['location']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section newsletter-section" id="contact">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Stay Connected</span>
                <h2 class="section-title">Join Our Newsletter</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Subscribe to receive exclusive offers, travel inspiration, and the latest updates from The Grand Horizon Palace.</p>
            </div>
            <form class="newsletter-form" id="newsletterForm" onsubmit="handleNewsletter(event)">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe Now</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Grand Horizon Palace</h4>
                <p>A sanctuary of refined elegance where luxury meets tranquility. Experience the pinnacle of hospitality.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#rooms">Rooms & Suites</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <li><a href="#offers">Special Offers</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Events & Weddings</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Info</h4>
                <p><i class="fa-solid fa-location-dot" style="color:var(--gold); margin-right:8px;"></i> 15 Marine Drive, Mumbai - 400020</p>
                <p><i class="fa-solid fa-phone" style="color:var(--gold); margin-right:8px;"></i> +91 22 4000 1000</p>
                <p><i class="fa-solid fa-envelope" style="color:var(--gold); margin-right:8px;"></i> thegh@gmail.com</p>
            </div>
            <div class="footer-col">
                <h4>Opening Hours</h4>
                <p>Check-in: 2:00 PM</p>
                <p>Check-out: 12:00 PM</p>
                <p>Reception: 24 Hours</p>
                <p>Room Service: 24/7</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <span>The Grand Horizon Palace</span>. All Rights Reserved. | Designed with <i class="fa-solid fa-heart" style="color:var(--gold);"></i> in India</p>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Newsletter Confirmation Modal -->
    <div class="newsletter-modal-overlay" id="newsletterModal">
      <div class="newsletter-modal">
        <button class="modal-close" onclick="closeNewsletterModal()">&times;</button>
        <div class="modal-icon">✓</div>
        <h3>Thank You for Subscribing!</h3>
        <p id="newsletterModalMsg">Check your inbox for exclusive offers.</p>
      </div>
    </div>

<script src="indexpage.js"></script>
</body>
</html>
