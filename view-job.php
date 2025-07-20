<?php
include "./components/header.php";
include "./components/navbar.php";
include_once "./auth/data-job.php";
?>


    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/media/64412f2bec5a6503d9a34e3f_diversity_inclusion_1_20_1_0df51cd6fc_1704cf4ab2.png');background-position: center;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content text-center">
						<h2><?php echo $title; ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="blog__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 lg-mb-25 mx-auto">
                    <div class="blog__details-area">
                        <h3 class="mt-25 mb-20"><?php echo $title; ?></h3>
                        <strong>Job Summary:</strong>
                        <?php echo $jobSummary; ?>

                        <hr />
						
                        <strong>Main Tasks include:</strong>
                        <?php echo $mainTasks; ?>

                        <hr />

                        <strong>Job Specification:</strong>
                        <?php echo $jobSpecification; ?>
                    </div>
				</div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>