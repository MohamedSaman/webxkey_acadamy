<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WebxKey Academy - Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #2E5DAA;
      --primary-light: #4A89DC;
      --accent: #6BB9F0;
      --light: #E8F4FC;
      --dark: #1A3B72;
      --white: #ffffff;
      --text-dark: #2D3748;
      --text-light: #718096;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f8fafc;
      color: var(--text-dark);
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      background-color: var(--white);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      padding: 1rem 0;
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      padding: 0.5rem 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
      height: 60px;
      margin-right: 10px;
    }

    .navbar-nav .nav-link {
      color: var(--text-dark);
      font-weight: 500;
      margin: 0 0.5rem;
      position: relative;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: var(--primary);
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
      width: 100%;
    }

    .btn-nav {
       background-color: var(--primary);
      color: var(--white);
      padding: 0.55rem 2rem;
      border: none;
      border-radius: 8px;
      font-weight: 400;
      font-size: 1.1rem;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }
.btn-nav:hover {
      color:#E8F4FC;
      background-color: var(--dark);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(46, 93, 170, 0.3);
    }

    .btn-nav::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: all 0.5s;
    }

    .btn-nav:hover::after {
      left: 100%;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(135deg, var(--light) 0%, var(--white) 100%);
      padding: 6rem 0 4rem;
      position: relative;
      overflow: hidden;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 70%;
      height: 200%;
      background: radial-gradient(circle, rgba(107, 185, 240, 0.1) 0%, rgba(107, 185, 240, 0) 70%);
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
    }

    .hero-section h1 {
      color: var(--primary);
      font-size: 3rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 1.5rem;
    }

    .hero-section p {
      font-size: 1.2rem;
      color: var(--text-light);
      max-width: 600px;
      margin: 0 auto 2rem;
    }

    .btn-hero {
      background-color: var(--primary);
      color: var(--white);
      padding: 0.75rem 2rem;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1.1rem;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }

    .btn-hero:hover {
      color:#E8F4FC;
      background-color: var(--dark);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(46, 93, 170, 0.3);
    }

    .btn-hero::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: all 0.5s;
    }

    .btn-hero:hover::after {
      left: 100%;
    }

    .hero-image {
      max-width: 100%;
      height: auto;
      border-radius: 12px;
      transform: perspective(1000px) rotateY(-10deg);
      transition: all 0.5s ease;
    }

    .hero-image:hover {
      transform: perspective(1000px) rotateY(0deg);
    }

    /* Features Section */
    .features-section {
      padding: 5rem 0;
      background-color: var(--white);
      position: relative;
    }

    .section-title {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-title h2 {
      color: var(--primary);
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .section-title p {
      color: var(--text-light);
      font-size: 1.1rem;
      max-width: 700px;
      margin: 0 auto;
    }

    .feature-card {
      border: none;
      border-radius: 12px;
      padding: 2.5rem 2rem;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      background-color: var(--white);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      height: 100%;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .feature-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(to right, var(--primary), var(--accent));
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(46, 93, 170, 0.15);
    }

    .feature-card:hover::before {
      height: 10px;
    }

    .feature-card i {
      font-size: 2.5rem;
      background: linear-gradient(to right, var(--primary), var(--primary-light));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      margin-bottom: 1.5rem;
      transition: all 0.3s ease;
    }

    .feature-card:hover i {
      transform: scale(1.1);
    }

    .feature-card h5 {
      font-weight: 600;
      color: var(--text-dark);
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }

    .feature-card p {
      color: var(--text-light);
      font-size: 1rem;
      line-height: 1.6;
    }

    /* Stats Section */
    .stats-section {
      padding: 4rem 0;
      background: linear-gradient(135deg, var(--primary) 0%, var(--dark) 100%);
      color: var(--white);
    }

    .stat-item {
      text-align: center;
      padding: 1.5rem;
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      background: linear-gradient(to right, var(--accent), var(--white));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* Footer */
    footer {
      background-color: var(--dark);
      color: var(--white);
      padding: 3rem 0 1.5rem;
    }

    .footer-logo {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--white);
      margin-bottom: 1.5rem;
      display: inline-block;
    }

    .footer-links h5 {
      color: var(--white);
      font-weight: 600;
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 0.75rem;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
      transition: all 0.3s ease;
      position: relative;
    }

    .footer-links a:hover {
      color: var(--white);
      padding-left: 5px;
    }

    .footer-links a::before {
      content: '→';
      position: absolute;
      left: -15px;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .footer-links a:hover::before {
      opacity: 1;
      left: -10px;
    }

    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: var(--white);
      margin-right: 0.75rem;
      transition: all 0.3s ease;
    }

    .social-links a:hover {
      background-color: var(--primary-light);
      transform: translateY(-3px);
    }

    .copyright {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 1.5rem;
      margin-top: 2rem;
      text-align: center;
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.9rem;
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeInUp 0.6s ease forwards;
    }

    .delay-1 {
      animation-delay: 0.2s;
    }

    .delay-2 {
      animation-delay: 0.4s;
    }

    .delay-3 {
      animation-delay: 0.6s;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .hero-section h1 {
        font-size: 2.5rem;
      }
      
      .hero-section p {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 768px) {
      .hero-section {
        padding: 4rem 0 3rem;
        
      }
      
      .hero-section h1 {
        font-size: 2.2rem;
      }
      
      .section-title h2 {
        font-size: 2rem;
      }
      
      .feature-card {
        padding: 2rem 1.5rem;
      }
    }

    @media (max-width: 576px) {
       .hero-section {
        padding: 4rem 0 3rem;
        margin-top:3rem;
      }
      .hero-section h1 {
        font-size: 2rem;
      }
      
      .hero-section p {
        font-size: 1rem;
      }
      
      .btn-hero {
        padding: 0.65rem 1.5rem;
        font-size: 1rem;
      }
      
      .section-title h2 {
        font-size: 1.8rem;
      }
      
      .stat-number {
        font-size: 2.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./image/WebxkeyAcademy Logo.png" alt="WebxKey Academy Logo"> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
        <a class="nav-link btn btn-nav" href="{{ route('loging.StLogin') }}">Login</a>
      </div>
    </div>
  </nav>
  

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 fade-in">
          <div class="hero-content">
            <h1>Empower Your Learning Journey with WebxKey Academy</h1>
            <p>Access premium courses, track your progress, and join a community of passionate learners with our cutting-edge student dashboard.</p>
            <a href="#" class="btn btn-hero">Explore Dashboard <i class="bi bi-arrow-right ms-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 fade-in delay-1">
          <div class="text-center mt-5 mt-lg-0">
            <img src="./image/WebxkeyAcademy home.png" alt="Dashboard Preview" class="hero-image img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6 fade-in">
          <div class="stat-item">
            <div class="stat-number" data-target="10000">0</div>
            <div class="stat-label">Active Students</div>
          </div>
        </div>
        <div class="col-md-3 col-6 fade-in delay-1">
          <div class="stat-item">
            <div class="stat-number" data-target="200">0</div>
            <div class="stat-label">Courses Available</div>
          </div>
        </div>
        <div class="col-md-3 col-6 fade-in delay-2">
          <div class="stat-item">
            <div class="stat-number" data-target="95">0</div>
            <div class="stat-label">Satisfaction Rate</div>
          </div>
        </div>
        <div class="col-md-3 col-6 fade-in delay-3">
          <div class="stat-item">
            <div class="stat-number" data-target="24">0</div>
            <div class="stat-label">Support Available</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="section-title fade-in">
        <h2>Everything You Need in One Place</h2>
        <p>Our comprehensive dashboard provides all the tools you need to succeed in your learning journey.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4 fade-in delay-1">
          <div class="feature-card">
            <i class="bi bi-book"></i>
            <h5>Course Management</h5>
            <p>Easily access all your enrolled courses, track progress, and pick up where you left off with our intuitive interface.</p>
          </div>
        </div>
        <div class="col-md-4 fade-in delay-2">
          <div class="feature-card">
            <i class="bi bi-graph-up"></i>
            <h5>Progress Analytics</h5>
            <p>Visualize your learning journey with detailed analytics and performance metrics to help you stay on track.</p>
          </div>
        </div>
        <div class="col-md-4 fade-in delay-3">
          <div class="feature-card">
            <i class="bi bi-award"></i>
            <h5>Achievement Tracking</h5>
            <p>Celebrate your milestones with our achievement system that recognizes your progress and accomplishments.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="#" class="footer-logo">WebxKey Academy</a>
          <p style="color: rgba(255, 255, 255, 0.7);">Empowering the next generation of learners with cutting-edge education technology.</p>
          <div class="social-links mt-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
          <div class="footer-links">
            <h5>Quick Links</h5>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
          <div class="footer-links">
            <h5>Resources</h5>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Tutorials</a></li>
              <li><a href="#">Webinars</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="footer-links">
            <h5>Contact Us</h5>
            <ul>
              <li><i class="bi bi-envelope me-2"></i> info@webxkey.com</li>
              <li><i class="bi bi-telephone me-2"></i> +1 (555) 123-4567</li>
              <li><i class="bi bi-geo-alt me-2"></i> 123 Education St, Tech City</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; 2025 WebxKey Academy. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Improved counter animation function
    function animateCounter(counter) {
      const target = +counter.getAttribute('data-target');
      const start = 0;
      const duration = 2000; // Animation duration in ms
      const startTime = performance.now();
      
      function updateCounter(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        
        // Ease-out function for smoother animation
        const easedProgress = 1 - Math.pow(1 - progress, 3);
        
        let value;
        if (counter.nextElementSibling.innerText.includes('Rate')) {
          // For percentage
          value = Math.floor(easedProgress * target);
          counter.innerText = value + '%';
        } else if (counter.nextElementSibling.innerText.includes('Support')) {
          // For 24/7
          value = Math.floor(easedProgress * target);
          counter.innerText = value + '/7';
        } else {
          // For other numbers
          value = Math.floor(easedProgress * target);
          counter.innerText = value.toLocaleString() + (target >= 1000 ? '+' : '');
        }
        
        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        }
      }
      
      requestAnimationFrame(updateCounter);
    }

    // Start animations when stats section is in view
    function startCountersWhenVisible() {
      const statsSection = document.querySelector('.stats-section');
      const sectionPosition = statsSection.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.3;

      if (sectionPosition < screenPosition) {
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
          animateCounter(counter);
        });
        window.removeEventListener('scroll', startCountersWhenVisible);
      }
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
      // Navbar scroll effect
      window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('scrolled', window.scrollY > 50);
      });

      // Start counter animation when stats are visible
      window.addEventListener('scroll', startCountersWhenVisible);
      // Also check on page load in case stats are already visible
      startCountersWhenVisible();
    });
  </script>
</body>
</html>