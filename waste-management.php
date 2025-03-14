<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb__area" style="background-image: url('assets/img/about.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Waste Management</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
                            <li class="text-white">Services<i class="fa-regular fa-angle-right"></i></li>
							<li>Waste Management</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="services__details section-padding">
        <div class="container">
            <div class="row">
                <?php include "./components/services-menu.php"; ?>
                <div class="col-lg-8">
                    <div class="services__details-area">
                        <img src="assets/img/service/waste3.jpg" alt="image">
                        <h3 class="mt-25 mb-20">Waste Management</h3>
                        <p class="mb-20">Giolee renders waste management services that is aimed at safely handling the various wastes generated during industrial processes and exploration activities thereby reducing the impact of the waste on contaminated areas and improving the areas.</p>
                        <p class="mb-20">The waste management activities handled by Giolee involves and not restricted to the evacuation, transportation, disposal and recycling of waste and harmful materials.</p>
                        <div class="row mt-40 mb-40">
                            <div class="col-sm-6 sm-mb-25">
                                <img class="img_full" src="assets/img/service/waste-management-III.jpg"alt="image">
                            </div>
                            <div class="col-sm-6">
                                <img class="img_full" src="assets/img/service/waste-management-IIII.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<?php include "./components/footer.php"; ?>