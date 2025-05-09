<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb__area" style="background-image: url('assets/img/page/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Request Quote</h2>
						<ul>
							<li><a href="index.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Request Quote</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>       
    <!-- Breadcrumb Area End -->
    <!-- Request Quote Page Start -->
    <div class="request__quote section-padding-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>First Name<span> *</span></label>
                                    <input type="text" name="name" placeholder="First" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last">
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Email Address<span> *</span></label>
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Number<span> *</span></label>
                                    <input type="text" placeholder="+00 123 4567" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Company/Organization<span> *</span></label>
                                    <input type="text" placeholder="Envato" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Website<span> *</span></label>
                                    <input type="text" placeholder="http://envato.com" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <p class="mb-10">What services can we provide you?<span> *</span></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="request__quote-services">
                                            <label><input class="mr-10" type="checkbox">Optimization (SEO)</label>
                                            <label><input class="mr-10" type="checkbox">Web Design</label>
                                            <label><input class="mr-10" type="checkbox">Web Hosting / Maintenance</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="request__quote-services">
                                            <label><input class="mr-10" type="checkbox">Content Writing</label>
                                            <label><input class="mr-10" type="checkbox">Search Engine Marketing</label>
                                            <label><input class="mr-10" type="checkbox">Social Media</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="request__quote-services">
                                            <label><input class="mr-10" type="checkbox">ADA Compliance</label>
                                            <label><input class="mr-10" type="checkbox">Photography / Video</label>
                                            <label><input class="mr-10" type="checkbox">Email Marketing</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="request__quote-item">
                                    <label>Message<span> *</span></label>
                                    <textarea name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="build_button mt-30" type="submit">Submit Now<i class="flaticon-right-up"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include "./components/footer.php"; ?>