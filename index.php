<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vợt Tốt, Trận Hay – DK Cùng Bạn Bước Đến Chiến Thắng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <div class="nav-container">
        <a href="index.php" class="logo">
            <img src="image/logo.png" alt="Logo"></a>
        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            <a href="#signup" class="cta-button">Get Started</a>
        </div>
    </div>
</nav>


<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Title Copy Goes Here Be Awesome</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
        <a href="#signup" class="cta-button">Get Started</a>
    </div>
    <div class="hero-image">
        <img src="" alt=" ">
    </div>
</section>

<!-- Clients Section -->
<section class="clients">
    <h2>Trusted by</h2>
    <div class="client-logos">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing">
    <h2>Pricing Plans</h2>
    <div class="pricing-cards">
        <?php for ($i = 0; $i <= 3; $i++)?>
            <div class="pricing-card">
                <img src="path/to/your/image.jpg" alt="Plan Image">
                <h3>Aberglasslyn, NSW</h3>
                <p class="price">$723.99</p>
                <p>15.9% Project income</p>
                <p>6% Tax rate</p>
                <p>12.5% Project growth</p>
            </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter">
    <h2>Join 10,000+ subscribers</h2>
    <p>Join our mailing list to get the latest news</p>
    <form action="subscribe.php" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-links">
            <a href="#company">Company</a>
            <a href="#privacy">Privacy</a>
            <a href="#terms">Terms & Conditions</a>
        </div>
        <p>&copy; 2023 Company Name. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
