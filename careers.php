<?php
include "./components/header.php";
include "./components/navbar.php";
include_once "./auth/data-career.php";
?>


    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/<?php echo $breadcrumb; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Careers</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Careers</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    

    <div class="mission__area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 lg-mb-25">
                    <div class="mission__area-left mr-40 xl-mr-0">
                        <h2 class="title_split_anim"><?php echo $quoteTitle; ?></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission__area-right">
                        <div class="row">
                            <div class="col-md-6 md-mb-25 wow fadeInUp" data-wow-delay=".6s">
                                <div class="experience__area-list-item">
                                    <i class="flaticon-team"></i>
                                    <div class="experience__area-list-item-content">
                                        <?php echo $quoteOne; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".9s">
                                <div class="experience__area-list-item">
                                    <i class="flaticon-technology"></i>
                                    <div class="experience__area-list-item-content">
                                        <?php echo $quoteTwo; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="certification about__five section-padding">
        <div class="container">
            <div class="row al-center">
                <div class="col-lg-5 lg-mb-25">
                    <div class="about__five-image wow img_left_animation">
                        <img src="https://backoffice.giolee.com/<?php echo $careerImage; ?>" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__five-right ml-70 xl-ml-0">
                        <div class="about__five-right-title">
                            <h3 class="title_split_anim fw-bold"><?php echo $title; ?></h3>
                        </div>
                        <div class="features wow fadeInUp" data-wow-delay=".3s" style="background-image: url('https://backoffice.giolee.com/<?php echo $careerInnerImage; ?>');background-position: center;">
                            <h3><?php echo $careerInnerImagetitle; ?></h3>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".6s">
                            <?php echo $text; ?>
                        </div>
                        <div class="item_bounce">
                            <a class="build_button" href="#jobs">View Jobs<i class="flaticon-right-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

    $select_query = "SELECT * FROM jobs";

    $jobresult = mysqli_query($conn, $select_query);

    // Check for query errors
    if (!$jobresult) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($jobresult) > 0) {
        while ($row = mysqli_fetch_assoc($jobresult)) {
            $jobID = $row['jobID'];
            $title = $row['title'];
            $jobSummary = $row['jobSummary'];
            $mainTasks = $row['mainTasks'];
            $jobSpecification = $row['jobSpecification'];
            $status = $row['status'];
        }
    }
    ?>


    <div class="team__area section-padding" id="jobs" style="display: <?php if ($jobresult->num_rows > 0){ echo 'block';}else{ echo 'none';}?>">
        <div class="container">
            <div class="row mb-35">
                <div class="col-xl-12">
                    <div class="team__area-title t-center">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Work with Giolee</span>
                        <h2 class="title_split_anim">Explore Opportunities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                    $select_query = "SELECT * FROM jobs";

                    $result = mysqli_query($conn, $select_query);

                    // Check for query errors
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $jobID = $row['jobID'];
                            $title = $row['title'];
                            $status = $row['status'];
                            switch ($status) {
                                case "Closed";
                                    $class  = 'text-danger';
                                    $icon = '<i class="flaticon-cancel-1"></i>';
                                    break;
                                case "Open";
                                    $class  = 'text-success';
                                    $icon = '<i class="flaticon-checked"></i>';
                                    break;
                                default:
                                    $class  = '';
                            }
                        
                ?>
                <div class="col-xl-4 col-md-6 mb-4 wow fadeInUp mt-5" data-wow-delay=".4s">
                    <div class="price__area-item d-flex flex-column p-4" style="height: 14rem;width: 100%;object-fit: cover;object-position: top;border-radius: 1rem;">

                        <div class="price__area-item-price">
                            <h5><?php echo $title; ?></h5>
                        </div>

                        <div class="mt-auto">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="<?php echo $class; ?>">
                                        <?php echo $icon . ' ' . $status; ?>
                                    </span>
                                </div>
                                <div class="col text-end">
                                    <div class="price__area-item-btn">
                                        <a href="view-job?id=<?php echo $jobID; ?>" class="build_button">
                                            View <i class="flaticon-right-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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

    <div class="team__area section-padding" style="display: <?php if ($jobresult->num_rows == 0){ echo 'block';}else{ echo 'none';}?>">
        <div class="container">
            <div class="row mb-35">
                <div class="col-xl-12">
                    <div class="team__area-title t-center">
                        <img src="./assets/img/disabled-warning.png" width="200px" alt="">
                        <h2 class="title_split_anim">No Openings Yet!</h2>
                        <p class="mt-20">Send us your CV with us <a href="mailto:career@giolee.com" class="text-danger">career@giolee.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include "./components/footer.php"; ?>