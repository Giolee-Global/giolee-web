    <div class="cta__four">
        <div class="container">
            <div class="row jc-center">
                <div class="col-xl-12">
                    <div class="cta__four-area t-center" style="background-image: url('assets/img/cta.jpg');">
                        <div class="cta__four-area-content">
                            <h2 class="title_split_anim">Let’s work together to protect and restore our environment.</h2>
                            <div class="item_bounce">
                                <a class="build_button mt-40" href="contact">Free Consultation<i class="flaticon-right-up"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="footer__four">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="footer__four-area">
						<div class="row">
							<div class="col-lg-4 col-sm-6">
								<div class="footer__four-widget mr-40">
									<a class="logo" href="./"><img src="assets/img/Giolee-logo-light.png" alt="logo"></a>
									<p class="text-white">Act Globally and Play Locally with an intent of putting customer first.</p>
								</div>
                                <div class="footer__two-widget-about-social">
                                    <ul>
                                        <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://behance.net" target="_blank"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
							</div>
							
							<div class="col-lg-3 col-sm-6 col-6 lg-mt-30">
								<div class="footer__four-widget ml-40 lg-ml-0">
                                    <h5 class="mb-3" style="color: #f9e745;">Quick links</h5>
									<div class="footer-widget-menu">
										<ul>
											<li><a href="./">Home</a></li>
											<li><a href="faq">FAQ's</a></li>
                                            <li><a href="projects">Projects</a></li>
											<li><a href="terms">Terms of use</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-2 col-sm-6 col-6 lg-mt-30">
								<div class="footer__four-widget address">
                                    <h5 class="mb-3" style="color: #f9e745;">The Company</h5>
									<div class="footer-widget-menu">
										<ul>
                                            <li><a href="about">About us</a></li>
                                            <li><a href="team">Team</a></li>
                                            <li><a href="contact">Contact us</a></li>
											<li><a href="certifications">Certifications</a></li>
										</ul>
									</div>
								</div>
							</div>

                            <div class="col-lg-3 col-sm-6 sm-mt-30">
								<div class="footer__four-widget address">
									<h5 class="mb-3" style="color: #f9e745;">Connect with us</h5>
									<div class="footer__four-widget-address">
										<h6 class="mb-3"><a href="https://maps.app.goo.gl/rofQoiPbWf2MYXU26" target="_blank">18 Uyo Street, Rumuomasi 500102, Port Harcourt.</a></h6>
										<h6 class="mb-3">+234 703 151 3161</br> +234 805 510 8249</h6>
                                        <h6>info@giolee.com</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<div class="copyright__area four">
		<div class="container">
			<div class="row al-center">
				<div class="col-md-7 mx-auto">
					<div class="copyright__area-content md-t-center text-center md-mb-10">
						<p>© <script>document.write(new Date().getFullYear());</script> Giolee. All rights reserved. Built By <a href="https://www.webify.com.ng" target="_blank" style="color: #f9e745;">Webify</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/progressbar.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/swiper-bundle.min.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/gsap.js"></script>
	<script src="assets/js/scroll-trigger.js"></script>
	<script src="assets/js/split-text.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.addEventListener('keydown', function(e) {
        // Block Ctrl+U, Ctrl+S, Ctrl+C
        if ((e.ctrlKey && ['u','s','c'].includes(e.key.toLowerCase())) || 
            e.key === 'F12') {
            e.preventDefault();
        }
        });
    </script>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>

    <script>
      document.getElementById("contactForm").addEventListener("submit", function(e) {
        // Get the response token
        var response = grecaptcha.getResponse();

        // Check if the user has completed the reCAPTCHA
        if (response.length === 0) {
          e.preventDefault(); // Stop form submission
          alert("Please verify you are not a robot.");
          return false;
        }
      });
    </script>

    <script>
        const parent = document.getElementById('divColor');
        const elements = parent.querySelectorAll("*");

        elements.forEach(el => {
            el.style.color = "#ffffff"; // Change to any color
        });
    </script>
    
    <script>
      document.getElementById("quoteForm").addEventListener("submit", function(e) {
        // Get the response token
        var response = grecaptcha.getResponse();

        // Check if the user has completed the reCAPTCHA
        if (response.length === 0) {
          e.preventDefault(); // Stop form submission
          alert("Please verify you are not a robot.");
          return false;
        }
      });
    </script>


	<?php
    if (isset($_SESSION['success_message'])) {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['success_message']; ?>",
                icon: "success",
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: 'Close Now',
                cancelButtonColor: '#FF3366',
                timer: 4000
            });
        </script>
    <?php
        unset($_SESSION['success_message']);
    }
    ?>

    <?php
    if (isset($_SESSION['error_message'])) {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['error_message']; ?>",
                icon: "error",
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: 'Close Now',
                cancelButtonColor: '#FF3366',
                timer: 4000
            });
        </script>
    <?php
        unset($_SESSION['error_message']);
    }
    ?>

</body>

</html>