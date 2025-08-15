<?php
include "./components/header.php";
include "./components/navbar.php";
include_once "./auth/data-project.php";
?>

    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/<?php echo $heroImage; ?>');background-position: center;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2><?php echo $title; ?></h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
                            <li class="text-white"><a href="projects">Projects</a><i class="fa-regular fa-angle-right"></i></li>
							<li><?php echo $title; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="portfolio__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 columns_sticky lg-mb-25">
					<div class="portfolio__details-overview">
						<h4>Project Overview</h4>
						<div class="portfolio__details-overview-item">
							<span>Client:</span>
							<h6><?php echo $client; ?></h6>
						</div>
						<div class="portfolio__details-overview-item">
							<span>Category:</span>
							<h6><?php echo $categoryTitle; ?> </h6>
						</div>
						<div class="portfolio__details-overview-item">
							<span>Location:</span>
							<h6><?php echo $location; ?></h6>
						</div>
                        <div class="portfolio__details-overview-item">
							<span>Date:</span>
							<h6><?php echo date('F Y', $date); ?></h6>
						</div>
					</div>
                </div>
                <div class="col-lg-8">
                    <div class="portfolio__details-area">
                        <img src="https://backoffice.giolee.com/<?php echo $heroImage; ?>" alt="image" style="height: 500px; width: 100%; object-fit: cover;">
                        <h3 class="mt-25 mb-20"><?php echo $title; ?></h3>
                        <?php echo $description; ?>
                        <div class="row mt-40 mb-40 portfolio__details-area-image">
                            <?php foreach ($project_media_images as $img): ?>
                                <div class="col-md-6 mb-3">
                                    <img src="https://backoffice.giolee.com/<?php echo $img; ?>" class="img-fluid rounded" style="object-fit: cover; height: 400px; width: 100%;">
                                </div>
                            <?php endforeach; ?>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>