<?php
include "./components/header.php";
include "./components/navbar.php";
?>

<div class="breadcrumb__area" style="background-image: url('assets/img/projects.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb__area-content">
					<h2>Projects</h2>
					<ul>
						<li><a href="./">Home</a><i class="fa-regular fa-angle-right"></i></li>
						<li>Projects</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gallery__area four__columns section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 mb-40 wow fadeInUp" data-wow-delay=".3s">
				<div class="gallery__area-button t-center">
					<?php
						$category_query = "SELECT DISTINCT c.title FROM project_categories c JOIN projects p ON c.categoryID = p.projectCategoryID";
						$categories_result = mysqli_query($conn, $category_query);

						echo '<button class="active" data-filter="*">All</button>';
						while ($cat = mysqli_fetch_assoc($categories_result)) {
							$className = strtolower(str_replace(' ', '', $cat['title']));
							echo '<button data-filter=".' . $className . '">' . $cat['title'] . '</button>';
						}
					?>
				</div>					  
			</div>
		</div>

		<div class="row gallery__area-active">
			<?php
				$select_query = "SELECT 
									p.projectID,
									p.title,
									p.filePath AS heroImage,
									p.client,
									p.projectDate,
									p.projectCategoryID,
									p.location,
									p.description,
									c.categoryID,
									c.title AS categoryTitle
								FROM projects p
								JOIN project_categories c ON c.categoryID = p.projectCategoryID;";

				$result = mysqli_query($conn, $select_query);

				if (!$result) {
					die("Query failed: " . mysqli_error($conn));
				}

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$categoryTitle = $row['categoryTitle'];
						$className = strtolower(str_replace(' ', '', $categoryTitle));
			?>
				<div class="col-xl-4 col-md-6 mt-25 <?php echo $className; ?> wow fadeInUp" data-wow-delay=".4s">
					<div class="portfolio__four-item">
						<a href="project-details?id=<?php echo $row['projectID']; ?>"><i class="flaticon flaticon-right-up"></i></a>
						<img src="https://backoffice.giolee.com/<?php echo $row['heroImage']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
						<div class="portfolio__four-item-content">
							<span><?php echo $categoryTitle; ?></span>
							<h5><a href="project-details?id=<?php echo $row['projectID']; ?>"><?php echo $row['title']; ?></a></h5>
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