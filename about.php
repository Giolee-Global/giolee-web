<?php
include "./components/header.php";
include "./components/navbar.php";
include_once "./auth/data-about.php";
?>


    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/<?php echo $breadcrumb; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>About us</h2>
						<ul>
							<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>About us</li>
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
    
    <div class="about__five section-padding pt-0">
        <div class="container">
            <div class="row al-center">
                <div class="col-lg-5 lg-mb-25">
                    <div class="about__five-image wow img_left_animation">
                        <img src="assets/img/about_img.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__five-right ml-70 xl-ml-0">
                        <div class="about__five-right-title mb-10">
                            <span class="subtitle wow fadeInLeft" data-wow-delay=".4s"><?php echo $sectionOneSubTitle; ?></span>
                            <h2 class="title_split_anim"><?php echo $sectionOneTitle; ?></h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".2s"><?php echo $sectionOneText; ?></p>
                        <!-- <div class="item_bounce">
                            <a class="build_button mt-20" href="projects">See our projects<i class="flaticon-right-up"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="video__two" style="background-image: url('https://backoffice.giolee.com/<?php echo $sectionTwoImage; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="item_bounce" id="divColor">
                        <h3 class="mb-3"><?php echo $sectionTwoTitle; ?></h3>
                        <?php echo $sectionTwoText; ?>			
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="certification section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 lg-mb-25">
                    <div class="certification-left pt-60 pb-0">
                        <?php echo $sectionThreeText; ?>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="certification-right">
                        <img class="wow img_top_animation" src="https://backoffice.giolee.com/<?php echo $sectionThreeImage; ?>" alt="image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mt-80">
                        <div class="col-md-4 md-mb-25 wow fadeInUp" data-wow-delay=".4s">
                            <div class="industry__four-left-item borders pr-10 lg-pr-0">
                                <?php echo $sectionThreeSubTextOne; ?>
                            </div>
                        </div>
                        <div class="col-md-4 md-mb-25 wow fadeInUp" data-wow-delay=".4s">
                            <div class="industry__four-left-item borders pr-10 lg-pr-0">
                                <?php echo $sectionThreeSubTextTwo; ?>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".8s">
                            <div class="industry__four-left-item pl-20 xl-pl-0">
                                <?php echo $sectionThreeSubTextThree; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-padding">
		<div class="container">
			<div class="row al-center">
				<div class="col-xl-6 col-lg-5 lg-mb-25">
					<div class="choose__three-left t-right mr-60 xl-mr-0">
						<img class="lg_img_full wow img_left_animation" src="https://backoffice.giolee.com/<?php echo $sectionFourImage; ?>" alt="image">
					</div>
				</div>
				<div class="col-xl-6 col-lg-7">
					<div class="choose__three-right">
						<div class="choose__three-right-title mb-40">
							<span class="subtitle wow fadeInLeft" data-wow-delay=".4s"><?php echo $sectionFourSubTitle; ?></span>
							<?php echo $sectionFourText; ?>
						</div>
						<div class="item_bounce">
							<a class="build_button" href="contact">Contact us<i class="flaticon-right-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include "./components/footer.php"; ?>