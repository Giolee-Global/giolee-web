<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb__area" style="background-image: url('assets/img/contact.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Contact us</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Contact us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="contact__area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 lg-mb-25">
                    <div class="contact__area-left mr-40 xl-mr-0">
                        <div class="title">
                            <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Contact Us</span>
                            <h2 class="title_split_anim mb-25">Get In Touch</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">We’re here to assist you! Please reach out with any questions, feedback, or project inquiries.</p>
                        </div>
                        <div class="contact__area-left-contact wow fadeInUp" data-wow-delay=".7s">
                            <div class="contact__area-left-contact-item">
                                <div class="contact__area-left-contact-item-icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="contact__area-left-contact-item-content">
                                    <span>Phone</span>
                                    <h6><a href="">+234 703 151 3161 </br>+234 805 510 8249</a></h6>
                                </div>
                            </div>
                            <div class="contact__area-left-contact-item">
                                <div class="contact__area-left-contact-item-icon">
                                    <i class="flaticon-email-3"></i>
                                </div>
                                <div class="contact__area-left-contact-item-content">
                                    <span>Email Address</span>
                                    <h6><a href="mailto:info@giolee.com">info@giolee.com</a></h6>
                                </div>
                            </div>
                            <div class="contact__area-left-contact-item">
                                <div class="contact__area-left-contact-item-icon">
                                    <i class="flaticon-location-1"></i>
                                </div>
                                <div class="contact__area-left-contact-item-content">
                                    <span>Location:</span>
                                    <h6><a href="https://maps.app.goo.gl/rofQoiPbWf2MYXU26" target="_blank">18 Uyo Street, Rumuomasi 500102, Port Harcourt.</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay=".4s">
                    <div class="contact__area-form">
                        <h4>Send Message</h4>
                        <form action="#">
							<div class="row">
								<div class="col-md-6 mb-25">
									<div class="contact__form-area-item">
										<input type="text" name="name" placeholder="Full Name" required="required">
									</div>
								</div>
								<div class="col-md-6 md-mb-25">
									<div class="contact__form-area-item">
										<input type="email" name="email" placeholder="Email Address" required="required">
									</div>
								</div>
								<div class="col-md-12 mb-25">
									<div class="contact__form-area-item">
										<input type="text" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12 mb-25">
									<div class="contact__form-area-item">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="contact__form-area-item">
										<button class="build_button" type="submit">Submit Message <i class="flaticon-right-up"></i></button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="map section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="map-area">
                        <iframe loading="lazy"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6559699628065!2d7.0219065!3d4.8290009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cdc4346b50f1%3A0x6357e7a34d0fd166!2s18%20Uyo%20Street%2C%20Rumuola%2C%20Port%20Harcourt%20500101%2C%20Rivers!5e0!3m2!1sen!2sng!4v1739869667126!5m2!1sen!2sng" title="Giolee Global Resources Limited" aria-label="Giolee Global Resources Limited"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>