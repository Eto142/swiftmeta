
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-logo">
                     <img src="logo.png" alt="GCOWW Logo" style="width:150px; height:40px; object-fit:contain;">
                    </div>
                    <p class="footer-link">
                        Are you looking for a stable, reliable, guaranteed weekly income? Swift Meta Trade offers a range of options to make the most off your investment. Get involved to discover the power of trading.
                    </p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="text-light mb-3">Quick Links</h5>
                    <div class="footer-links">
                        <a href="#">Home</a> /
                        <a href="#">About us</a> /
                        <a href="#">Sign up</a> /
                        <a href="#">Login</a> /
                        <a href="#">FAQs</a> /
                        <a href="#">Trade</a> /
                        <a href="#">Cryptos</a> /
                        <a href="#">Indices</a> /
                        <a href="#">Forex</a> /
                        <a href="#">Energies</a> /
                        <a href="#">Shares</a>
                    </div>
                    <div class="mt-4">
                        <img src="https://via.placeholder.com/100x40?text=SSL+SECURE" alt="SSL Secured" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="text-light mb-3">Contact Information</h5>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Level 20 Heron Tower, 52 gate town, London EC2N 4AY</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>support@swiftmetatrd.com</span>
                    </div>
                    <div class="mt-4">
                        <h6 class="text-light mb-3">Follow Us</h6>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-muted"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-linkedin-in fa-lg"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">© 2023 Swift Meta Trade. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-links">
                        <a href="#">Privacy Policy</a> /
                        <a href="#">Terms of Service</a> /
                        <a href="#">Risk Disclosure</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        // Lightning Fast Preloader - Only 300ms!
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const preloader = document.querySelector('.pre-loader');
                preloader.classList.add('hidden');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 150);
            }, 300); // Ultra-fast - only 300ms!
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '8px 0';
                navbar.style.backgroundColor = 'rgba(2, 2, 28, 0.98)';
            } else {
                navbar.style.padding = '12px 0';
                navbar.style.backgroundColor = 'rgba(2, 2, 28, 0.95)';
            }
        });

        // Initialize Slick Slider for Hero Section
        $(document).ready(function(){
            $('.hero-slider').slick({
                dots: true,
                infinite: true,
                speed: 800,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 6000,
                pauseOnHover: false,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            arrows: false
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>