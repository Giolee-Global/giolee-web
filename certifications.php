<?php
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar.php";

    $filePath = "";
    $certificate_images = [];

    $certificate_query = "SELECT filePath FROM certificate";
    $certificate_result = mysqli_query($conn, $certificate_query);

    if ($certificate_result && mysqli_num_rows($certificate_result) > 0) {
        while ($row = mysqli_fetch_assoc($certificate_result)) {
            $certificate_images[] = $row['filePath'];
        }
    }
?>

    <div class="breadcrumb__area" style="background-image: url('assets/img/certifications.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Certifications</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Certifications</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="two__columns section-padding-three">
        <div class="container">
            <div class="row">
                <?php foreach ($certificate_images as $certificate_Path): ?>
                    <div class="col-md-4 mt-25 mb-50 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="portfolio__two-item">
                            <img src="https://backoffice.giolee.com/<?php echo $certificate_Path; ?>" alt="image">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>