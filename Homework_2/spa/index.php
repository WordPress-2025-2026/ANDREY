<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Spa & Wellness</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Serenity Spa</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Serenity Spa</h1>
                <p>Your journey to relaxation and wellness begins here</p>
                <a href="#book" class="cta-button">Book Now</a>
            </div>
        </section>

        <section id="services" class="services">
            <h2>Our Services</h2>
<?php 
require_once('components/services.php');
?>
        </section>        
        <section id="about" class="about">
            <h2>About Us</h2>
            <div class="about-content">
                <img src="/assets/images/spa-interior.jpg" alt="Spa Interior">
                <div class="about-text">
                    <p>Welcome to Serenity Spa, where luxury meets wellness. Our expert therapists are dedicated to providing you with the ultimate relaxation experience.</p>
                    <p>Using only the finest products and techniques, we ensure your complete satisfaction and well-being.</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <div class="contact-container">
                <form class="contact-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit" class="cta-button">Send Message</button>
                </form>
                <div class="contact-info">
                    <h3>Visit Us</h3>
                    <p>123 Wellness Street</p>
                    <p>City, Country</p>
                    <p>Phone: +1 234 567 890</p>
                    <p>Email: info@serenityspa.com</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Serenity Spa</h4>
                <p>Your journey to wellness starts here</p>
            </div>
            <div class="footer-section">
                <h4>Opening Hours</h4>
                <p>Monday - Friday: 9:00 AM - 8:00 PM</p>
                <p>Saturday - Sunday: 10:00 AM - 6:00 PM</p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Serenity Spa. All rights reserved.</p>
        </div>
    </footer>
</body>
</html> 