<?php
include "./components/header.php";
include "./components/navbar.php";
require_once "./auth/queries.php";

    $recaptchaSecret = '6LccIVsrAAAAAP5svhmZWCBpE6L5AEVMK9fMKgAh';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}&remoteip={$remoteip}");
    $responseData = json_decode($verify);

    if ($responseData->success) {
        // Verified successfully
        //echo "Success!";
    } else {
        // Failed verification
        //echo "reCAPTCHA failed. Please try again.";
    }
?>

    <div class="breadcrumb__area" style="background-image: url('assets/img/certified_2.jpg');">
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

    <div class="request__quote section-padding-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <form id="quoteForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>First Name<span> *</span></label>
                                    <input type="text" name="firstName" placeholder="First" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Last Name<span> *</span></label>
                                    <input type="text" name="lastName" placeholder="Last" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Email Address<span> *</span></label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Phone<span> *</span></label>
                                    <input type="text" name="phone" placeholder="+234 816 268 0096" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>Company/Organization<span> *</span></label>
                                    <input type="text" name="company" placeholder="NNPC" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="request__quote-item">
                                    <label>What services can we provide you?<span> *</span></label>
                                    <select class="form-select" name="service" required aria-label="Service">
                                        <option selected disabled>Select Service</option>
                                        <option>Oil Spill Response, Onshore & Offshore</option>
                                        <option>Oil Spill Clean Up and Remediation</option>
                                        <option>Waste Management</option>
                                        <option>Water Treatment</option>
                                        <option>⁠Environmental Consultancy, Audit, & Assessment</option>
                                        <option>Laboratory Services</option>
                                        <option>Ecosystem Mangrove Restoration</option>
                                        <option>Training</option>
                                        <option>Decommissioning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="request__quote-item">
                                    <label>Project Description<span> *</span></label>
                                    <textarea name="description"></textarea>
                                </div>
                            </div>
                            <div class="mt-30">
                                <div class="g-recaptcha" data-sitekey="6LccIVsrAAAAALR7ix-WuRi4zLzhz5FmitZWrogO"></div>
                            </div>
                            <div class="col-lg-12">
                                <button class="build_button mt-30" type="submit" name="new_quote_btn">Submit Now<i class="flaticon-right-up"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include "./components/footer.php"; ?>