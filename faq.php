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
						<h2>FAQs</h2>
						<ul>
							<li><a href="index.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>FAQs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="faq__page section-padding">
        <div class="container">
            <div class="row jc-center">
                <div class="col-xl-10">
                    <div class="wow fadeInUp" data-wow-delay=".4s" id="accordionExample">
                        <?php

                            $select_query = "SELECT * FROM faq";

                            $result = mysqli_query($conn, $select_query);

                            // Check for query errors
                            if (!$result) {
                                die("Query failed: " . mysqli_error($conn));
                            }

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $faqID = $row['faqID'];
                                    $question = $row['question'];
                                    $designation = $row['designation'];
                                    $answer = $row['answer'];
                                
                        ?>
                        <div class="faq-item">
                            <h5 class="icon collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faqID; ?>"><?php echo $question; ?></h5>
                            <div id="collapse<?php echo $faqID; ?>" class="faq-item-body collapse" data-bs-parent="#accordionExample">
                                <p><?php echo $answer; ?></p>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "./components/footer.php"; ?>