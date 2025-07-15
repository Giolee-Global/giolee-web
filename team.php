<?php
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb__area" style="background-image: url('assets/img/projects.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Team</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Team</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="team__area section-padding">
        <div class="container">
            <div class="row mb-35">
                <div class="col-xl-12">
                    <div class="team__area-title t-center">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Meet Our Experts</span>
                        <h2 class="title_split_anim">Dedicated Professionals</h2>
                        <p>At Giolee, we have developed a staff of highly skilled individuals that make up the team,</br>to provide our clients with  efficient service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                    $select_query = "SELECT * FROM team";

                    $result = mysqli_query($conn, $select_query);

                    // Check for query errors
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $teamID = $row['teamID'];
                            $fullName = $row['fullName'];
                            $designation = $row['designation'];
                            $filePath = $row['filePath'];
                        
                ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp mt-25" data-wow-delay=".3s">
                    <div class="team__area-item">
                        <img class="img_full" src="https://backoffice.giolee.com/<?php echo $filePath; ?>" alt="image" style="height: 24rem;width: 100%;object-fit: cover;object-position: top;border-radius: 1rem;">
                        <div class="team__area-item-content t-center pt-20">
                            <h5><?php echo $fullName; ?></h5>
                            <span><?php echo $designation; ?></span>
                        </div>
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