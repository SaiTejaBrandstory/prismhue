<footer class="footer footer-section">
    <div class="container">
        <div class="row py-3">
           <!-- First Column (Logo & About) -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="footer-first-col">
                    <div class="footer-content">
                        <img src="./assets/images/footer-logo.svg" alt="Logo" class="footer-logo mb-3">
                        <p class="footer-about">
                            Prismhue specialises in digital branding solutions through high-quality signage and interactive graphics. With years of advertising expertise, our marketing solutions provider brings complex ideas to life every day.
                        </p>
                    </div>
                    <p class="footer-copyright">
                        Copyright © 2024 Prismhue. <br> All rights reserved.
                    </p>
                </div>
            </div>

            <!-- Services Column -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h4 class="footer-title">Services</h4>
                <ul class="footer-links">
                    <li><a href="services/branding">Branding</a></li>
                    <li><a href="services/signages">Signages</a></li>
                    <li><a href="services/acoustic-cutting-panels">Acoustic Cutting Panels</a></li>
                    <li><a href="services/digital-signages">Digital Signages</a></li>
                    <li><a href="services/skylit">Skylit Solutions</a></li>
                    <li><a href="services/braille-signages">Braille Signages</a></li>
                    <li><a href="services/environmental-graphics">Environmental Graphics</a></li>
                </ul>
            </div>

            <!-- Company Column -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h4 class="footer-title">Company</h4>
                <ul class="footer-links">
                    <li> <a href="./" class="<?php echo (empty($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li> <a href="./about" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'active' : ''; ?>">About us</a></li>
                    <li><a href="./services" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="./contact" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
                </ul>
            </div>

            <!-- Support Column -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h4 class="footer-title">Support</h4>
                <ul class="footer-links">
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Status</a></li>
                </ul>
            </div>

            <!-- Newsletter Column -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
    <h4 class="footer-title">Stay up to date</h4>
    <div class="footer-newsletter">
        <input type="email" class="form-control" placeholder="Your email address">
        <button class="btn" type="button" aria-label="Send">
            <i class="fa-solid fa-paper-plane"></i>
        </button>
    </div>
    <!-- Social Media Icons -->
    <div class="social-icons ">
        <a href="https://www.facebook.com/prismhue.in/" class="social-icon" aria-label="Facebook" target="_blank">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/prismhue_117/" class="social-icon" aria-label="Instagram" target="_blank">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/company/prismhue-prints/" class="social-icon" aria-label="LinkedIn"   target="_blank">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="https://x.com/prismhueprints" class="social-icon" aria-label="X" target="_blank">
            <i class="fa-brands fa-x-twitter"></i>
        </a>
    </div>
</div>
        </div>
    </div>
</footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome (Optional for dynamic icons) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-YOUR-INTEGRITY-HERE" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    


    <!-- Custom JS -->
    <script src="./assets/js/script.js"></script>
</body>
</html>
