<?php
include "./components/header.php";
include "./components/navbar.php";
include_once "./auth/data-ceo.php";
?>


    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/<?php echo $breadcrumb; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>The CEO's Desk</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>CEO Desk</li>
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
                            <div class="col-md-12 md-mb-25 wow fadeInUp" data-wow-delay=".6s">
                                <div class="experience__area-list-item">
                                    <div>
                                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $quote; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="choose__us mb-80 pb-80">
		<div class="container">
			<div class="row al-center">
                <div class="col-xl-6">
					<div class="choose__us-right xl-ml-0">
						<div class="choose__us-right-title">
							<span class="subtitle wow fadeInLeft" data-wow-delay=".4s"><?php echo $subTitle; ?></span>
							<h2 class="title_split_anim mb-30"><?php echo $title; ?></h2>
                            <?php echo $text; ?>
						</div>
						<div class="choose__us-right-skill wow fadeInUp" data-wow-delay=".7s">
							<div class="skill__area-item">
								<img src="https://backoffice.giolee.com/media/Lesi-signature.png" width="350" alt="">
							</div>
                        </div>
						<div class="item_bounce">
							<a class="build_button mt-50" href="certifications">View Certifications<i class="flaticon-right-up"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 xl-mb-25">
					<div class="choose__us-left t-right xl-mr-0">
						<img class="wow img_left_animation" src="https://backoffice.giolee.com/<?php echo $ceoImage; ?>" alt="image">
						<!-- <div class="choose__us-left-counter bounce_x" style="background-image: url('assets/img/shape/shape.png');">
							<h2><span class="counter">156</span>k</h2>
							<p>Project Completed</p>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include "./components/footer.php"; ?>