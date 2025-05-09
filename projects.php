<?php
include "./components/header.php";
include "./components/navbar.php";
?>
    <div class="breadcrumb__area" style="background-image: url('assets/img/projects.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Projects</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Projects</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="gallery__area four__columns section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-40 wow fadeInUp" data-wow-delay=".3s">
                    <div class="gallery__area-button t-center">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".oilSpill">Oil Spill Response, Onshore & Offshore</button>
                        <button data-filter=".remediation">Oil Spill Clean Up & Remediation</button>
                        <button data-filter=".wasteMangament">Waste Management</button>
                        <button data-filter=".waterTreatment">Water Treatment</button>
                        <button data-filter=".environmental">⁠Environmental Consultancy</button>
                        <button data-filter=".laboratoryServices">Laboratory Services</button>
						<button data-filter=".mangroveRestoration">Mangrove Restoration</button>
						<button data-filter=".training">Training</button>
						<button data-filter=".decommissioning">Decommissioning</button>
                    </div>					  
                </div>
            </div>
            <div class="row gallery__area-active">
                <div class="col-xl-4 col-md-6 mt-25 oilSpill wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Public Spaces</span>
							<h5><a href="portfolio-details.html">Community Center</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 remediation wow fadeInUp" data-wow-delay=".7s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Healthcare</span>
							<h5><a href="portfolio-details.html">Healthcare Facility</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 wasteMangament wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
                            <span>Hospitality</span>
                            <h5><a href="portfolio-details.html">Seaside Resort Expansion</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 waterTreatment wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
                            <span>Retail</span>
                            <h5><a href="portfolio-details.html">Urban Mall Development</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 environmental wow fadeInUp" data-wow-delay=".7s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
                            <span>Modern</span>
                            <h5><a href="portfolio-details.html">Presidential Amnesty Training</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 laboratoryServices wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Industrial</span>
							<h5><a href="portfolio-details.html">Industrial Warehouse</a></h5>
						</div>
					</div>
                </div>
				<div class="col-xl-4 col-md-6 mt-25 mangroveRestoration wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Industrial</span>
							<h5><a href="portfolio-details.html">Industrial Warehouse</a></h5>
						</div>
					</div>
                </div>
				<div class="col-xl-4 col-md-6 mt-25 training wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Industrial</span>
							<h5><a href="portfolio-details.html">Industrial Warehouse</a></h5>
						</div>
					</div>
                </div>
				<div class="col-xl-4 col-md-6 mt-25 decommissioning wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.html"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/projects/project.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Industrial</span>
							<h5><a href="portfolio-details.html">Industrial Warehouse</a></h5>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>