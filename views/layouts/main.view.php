<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/mobirec/styles/simple.css">
  <title>Mobirec - Mobile Recharge Commission App</title>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logo-container">
          <img src="/mobirec/images/logo.png" alt="Mobirec Logo" class="logo-img">
          <div>
            <h1 class="company-name text-info">Mobirec</h1>
            <p class="company-tagline">Mobile Recharge & Payments</p>
          </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link text-light" href="index.php?page=home">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Contact</a></li>
          </ul>

          <div class="d-flex gap-2 navbar-buttons">
            <a href="index.php?page=login" class="btn btn-login">Login</a>
            <a href="#" class="btn btn-register">Join</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="neon-border"></div>
  </header>

  <!-- Main Content -->
  <main>
    <div class="container">
      <?= $content ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-black text-white pt-5">
    <div class="container">
      <div class="row g-4">

        <!-- Company Info -->
        <div class="col-lg-4 col-md-6">
          <div class="glass p-4 rounded-4 h-100 shadow-sm">
            <div class="d-flex align-items-center mb-3">
              <img src="/mobirec/images/logo.png" alt="Logo" class="me-3" style="width: 50px; height: 50px;">
              <div>
                <h4 class="mb-0 text-gradient">Mobirec</h4>
                <small class="text-light opacity-75">Mobile Recharge & Payments</small>
              </div>
            </div>
            <p class="small text-light opacity-85">Mobirec Pvt Ltd is an IT and Recharge services company offering digital solutions and seamless mobile recharges with attractive commission structures.</p>
            <div class="d-flex gap-3 mt-3">
              <a href="#" class="social-link neon-hover"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-link neon-hover"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-link neon-hover"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-link neon-hover"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-link neon-hover"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-4 col-md-6">
          <div class="glass p-4 rounded-4 h-100 shadow-sm">
            <h5 class="text-gradient mb-3">Quick Links</h5>
            <div class="row">
              <div class="col-6">
                <ul class="list-unstyled small">
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Home</a></li>
                  <li><a href="#" class="text-white text-decoration-none neon-hover">About Us</a></li>
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Services</a></li>
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Contact</a></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="list-unstyled small">
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Privacy Policy</a></li>
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Terms & Conditions</a></li>
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Refund Policy</a></li>
                  <li><a href="#" class="text-white text-decoration-none neon-hover">Support</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-4 col-md-12">
          <div class="glass p-4 rounded-4 h-100 shadow-sm">
            <h5 class="text-gradient mb-3">Contact Us</h5>
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-map-marker-alt me-3 mt-1 text-gradient"></i>
              <div>
                <p class="fw-semibold mb-0 text-white">Mobirec Pvt Ltd</p>
                <small class="text-light opacity-75">Dalgaon Part, Assam, India</small>
              </div>
            </div>
            <div class="d-flex align-items-start mb-3">
              <i class="fas fa-phone me-3 mt-1 text-gradient"></i>
              <div>
                <p class="fw-semibold mb-0 text-white">+91 07969361131</p>
                <small class="text-light opacity-75">Mon-Sat, 9:00 AM - 6:00 PM</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <i class="fas fa-envelope me-3 mt-1 text-gradient"></i>
              <div>
                <a href="mailto:support@mobirec.in" class="fw-semibold text-white text-decoration-none">support@mobirec.in</a>
                <br>
                <small class="text-light opacity-75">Send us your query anytime!</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom mt-5 py-3 border-top border-secondary text-center text-light small">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <span>&copy; 2025 Mobirec Private Limited. All Rights Reserved.</span>
        <img src="/api/placeholder/120/30" alt="Payment Options" class="mt-3 mt-md-0" />
      </div>
    </div>
  </footer>


  <!-- bootstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <!-- tsParticles CDN -->
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@3.3.0/tsparticles.bundle.min.js"></script>


</body>

</html>