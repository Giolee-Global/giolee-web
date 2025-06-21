<?php
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar.php";
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
                <?php

                    $select_query = "SELECT * FROM certificate";

                    $result = mysqli_query($conn, $select_query);

                    // Check for query errors
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $certificateID = $row['certificateID'];
                            $title = $row['title'];
                            $filePath = $row['filePath'];
                        
                ?>
                    <div class="col-md-4 mt-25 mb-50 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="portfolio__two-item">
                            <img src="https://backoffice.giolee.com/<?php echo $filePath; ?>" alt="image">
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>