<?php
include "./components/header.php";
include "./components/navbar.php";
include_once "./auth/data-training.php";
?>

    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/<?php echo $breadcrumb_filePath; ?>');background-position: center;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2><?php echo $title; ?></h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
                            <li class="text-white">Services<i class="fa-regular fa-angle-right"></i></li>
							<li><?php echo $title; ?></li>
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
                        <img src="https://backoffice.giolee.com/<?php echo $hero_filePath; ?>" alt="image">
                        <h3 class="mt-25 mb-20"><?php echo $title; ?></h3>
                        <div>
                            <?php echo $firstParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <?php foreach ($media_images as $imagePath): ?>
                                <div class="col-sm-6 mb-20">
                                    <img class="img_full" src="https://backoffice.giolee.com/<?php echo $imagePath; ?>"alt="image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php echo $secondParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <?php foreach ($media_two_images as $image_two_Path): ?>
                                <div class="col-sm-6 mb-20">
                                    <img class="img_full" src="https://backoffice.giolee.com/<?php echo $image_two_Path; ?>"alt="image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php echo $thirdParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <?php foreach ($media_three_images as $image_three_Path): ?>
                                <div class="col-sm-6 mb-20">
                                    <img class="img_full" src="https://backoffice.giolee.com/<?php echo $image_three_Path; ?>"alt="image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php echo $fourthParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <?php foreach ($media_four_images as $image_four_Path): ?>
                                <div class="col-sm-6 mb-20">
                                    <img class="img_full" src="https://backoffice.giolee.com/<?php echo $image_four_Path; ?>"alt="image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php echo $fifthParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <?php foreach ($media_five_images as $image_five_Path): ?>
                                <div class="col-sm-6 mb-20">
                                    <img class="img_full" src="https://backoffice.giolee.com/<?php echo $image_five_Path; ?>"alt="image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php echo $sixthParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <?php foreach ($media_six_images as $image_six_Path): ?>
                                <div class="col-sm-6 mb-20">
                                    <img class="img_full" src="https://backoffice.giolee.com/<?php echo $image_six_Path; ?>"alt="image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<?php include "./components/footer.php"; ?>