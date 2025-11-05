<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Spa & Wellness</title>
    <link rel="stylesheet" href="/assets/css/styles_blog.css">
</head>

<body>
    <?php
    require_once('components/header.php');
    ?>

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
    <?php
    require_once('components/footer.php');
    ?>
</body>

</html>