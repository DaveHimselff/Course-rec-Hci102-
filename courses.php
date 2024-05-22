<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/hcdcB.png); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li>Enroll now!</li>
						</ul>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget" style= "margin-left: 290px;">
					<a class="tag" href="#web">Programming</a>
					<a class="tag" href="#prog">Hardware</a>
					<a class="tag" href="#">Circuit Knowledge</a>
					<a class="tag" href="#">Library management</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<h2 style= "font-size: 30px; padding-left: 330px">College of Engineering and Technology</h2>
					<div class="row" >
                        <div class="section-header text-center" >
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="http://localhost/courserecommendation/BSIT.php" target="_blank" class="course-img">
									<img src="./img/ITS.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="http://localhost/courserecommendation/BSIT.php" target="_blank" style="font-size:18px; text-align: center">Bachelor of Science in Information Technology</a>
								<br>
								<div class="course-details" style="margin:5px;">
									<span class ="course-category" style= "margin-left: 60px;">CET Deparment</span>
									<span class="course-price course-free"> </span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="http://localhost/courserecommendation/BSCPE.php" target="_blank" class="course-img">
									<img src="./img/BSCPE.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="http://localhost/courserecommendation/BSCPE.php" target="_blank" style="font-size:18px; text-align: center"><b>Bachelor of Science in Computer Engineering </b></a>
								<br>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category" style= "margin-left: 60px;">CET Department</span>
									<span class="course-price course-free"> </span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="http://localhost/courserecommendation/BSECE.php" target="_blank" class="course-img">
									<img src="./img/ECE.jpg " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="http://localhost/courserecommendation/BSECE.php" target="_blank" style="font-size:18px; text-align: center">Bachelor of Science in Electronics Engineering</a>
								<br>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category" style= "margin-left: 60px;">CET Department</span>
										<span class="course-price course-free"> </span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="http://localhost/courserecommendation/BLIS.php" class="course-img" target="_blank">
									<img src="./img/BLIS.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="http://localhost/courserecommendation/BLIS.php" target="_blank" style="font-size:18px; text-align: center">Bachelor of Library and Information Science</a>
								<br>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category" style= "margin-left: 60px">CET Department</span>
									<span class="course-price course-free"> </span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->

						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
