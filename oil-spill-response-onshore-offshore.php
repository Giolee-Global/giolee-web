<?php
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar.php";

    $serviceID = $_GET['id'];
                
    $select_query = "SELECT * FROM services INNER JOIN media ON services.serviceID = media.serviceID";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $serviceID = $row['serviceID'];
            $title = $row['title'];
            $filePath = $row['filePath'];
            $firstParagraph = $row['firstParagraph'];
            $secondParagraph = $row['secondParagraph'];
            $thirdParagraph = $row['thirdParagraph'];
        }
    }

?>

    <div class="breadcrumb__area" style="background-image: url('https://backoffice.giolee.com/<?php echo $filePath; ?>');background-position: center;">
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
                        <img src="assets/img/service/onshore.jpg" alt="image">
                        <h3 class="mt-25 mb-20"><?php echo $title; ?></h3>
                        <div>
                            <?php echo $firstParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore1.jpg"alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore2.jpg" alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore3.jpg" alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore4.jpg" alt="image">
                            </div>
                        </div>
                        <div>
                            <?php echo $secondParagraph; ?>
                        </div>
                        <div class="row mt-40 mb-40">
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore5.jpg"alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore6.jpg" alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore7.jpg" alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore8.jpg" alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore9.jpg" alt="image">
                            </div>
                            <div class="col-sm-6 mb-20">
                                <img class="img_full" src="assets/img/service/onshore10.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<?php include "./components/footer.php"; ?>