<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Background Image -->
			<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
    			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/hcdcB.png); width:100%; height: 656px;"></div>
			<?php else: ?>
    			<div class="bg-image2 bg-parallax2 overlay" style="background-image:url(./img/Allien3.jpg); width:30%; height: 500px;"></div>
			<?php endif ?>
			<!-- /Background Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style=" color: white; margin-left: 5px;" ><b style= "font-family: 'Inter';font-size: 22px;">Discover courses just for you! Get<br>suggestions that fit what you want to<br>learn and where you want to go in your<br>career. It's like having a personal guide<br>helping you find the perfect course<br>match. Start exploring today!</b></p>

									<a class="main-button icon-button" href="login.php">LEARN MORE</a>

								<?php else: ?>
									<p class="lead white-text" style=" font-size: 45px; margin-left: 5px; Color: #af0b00;" ><br><b>COLLEGE OF<br>ENGINEERING AND<br>TECHNOLOGY</b></p>

									<a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->




        <!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="font-size: 45px;">Welcome to Hcdc College of Engineering and Technology</h2>
						<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
						<p class="lead"><b style="color: rgb(56, 48, 48);"></b> Embark on your journey to excellence by laying a solid foundation with our <br>expertly crafted course recommendations, paving the way for  <br> a future filled with endless possibilities.</p>
					</div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h1>Course Prediction </h1>
        </div>
        <div class="card-body">
          <p>
            Discover your perfect course with our tailored test, guiding 
you confidently toward your academic and career goals.
          </p>
          
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h1>Knowledge Network</h1>
        </div>
        <div class="card-body">
          <p>
            Access a wealth of knowledge from multiple            sources, such
            as informative links 
          and study materials,
          to enrich your 
          learning journey.
          </p>
          
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h1>Online Courses</h1>
        </div>
        <div class="card-body">
          <p>
            Link to relevant courses.
          </p>
          
        </div>
      </div>
    </div>
  </div>
					</div>
					<!-- /feature -->
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">ABOUT HCDC CET COURSE</h2>
							<p class="lead" style="font-size: 18px;  margin-top: 50px;"><b> Bringing you up to modernization, the College of Engineering and Technology offers you the opportunity to become part of the new breed of engineers and IT professionals commanding respect in established and emerging industries, government, and academic institutions in the global arena. <br><br>We make you different through the dynamic interaction of forward-looking curricular, innovative learning infrastructure, and modern computer laboratories.<br><br> The HCDC College of Engineering and Technology offers you the opportunity to become part of the new breed of engineers and IT professionals commanding respect in established and emerging industries, government, and academic institutions in the global arena.<br><br>We bring you up to speed through the dynamic interaction of forward looking curricula, innovative learning infrastructure, and modern computer laboratories. Our highly qualified educators help you imbibe Christian values of discipline and commitment as well as teach you to adapt to fast-changing technologies, cultures, and environments.</p>
						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img style= "width: 300px; margin-top: 180px;" src="./img/CETNEW.jpg" alt="">
						</div>
					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/hcdcB.png)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Help us to get to know you.</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

<?php include 'footer.php'?>
</html>
