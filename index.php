<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>C.R.R. Polytechnic</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Education Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<!-- //css files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900iSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script>
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
	</script>

	<!-- //js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>


	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->



</head>

<body>

	<?php
	// $conn = mysqli_connect("localhost", "root", "", "crrpolytechnic") or die("connection failed");


	$forScroll = " SELECT `id`, `Type`, `Image`, `Title`, `Sub_Title`, `created_at`, `updated_at` FROM `images` WHERE Type = 'Scroll'";
	$facilities = " SELECT `id`, `Type`, `Image`, `Title`, `Sub_Title`, `created_at`, `updated_at` FROM `images` WHERE Type = 'Facility'";
	$gallery = " SELECT `id`, `Type`, `Image`, `Title`, `Sub_Title`, `created_at`, `updated_at` FROM `images` WHERE Type = 'Gallery'";
	$news = " SELECT `id`, `Type`, `Image`, `Title`, `Sub_Title`, `created_at`, `updated_at` FROM `images` WHERE Type = 'News'";


	$scrollresult = mysqli_query($conn, $forScroll);
	$faciltyresult = mysqli_query($conn, $facilities);
	$galleryresult = mysqli_query($conn, $gallery);
	$newsresult = mysqli_query($conn, $news)
	?>

	<?php include 'header.php'; ?>
	<div class="header" id="home">

		<div class="logo">
			<a href="#">
			</a>
		</div>

		<!-- Slider -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">

					<?php
					while ($row1 = mysqli_fetch_array($scrollresult)) :;
					?>

						<li>
							<div class='slider-img'><img src="<?php echo $image_url ?>/<?php echo $row1['Image'] ?> " class='img-responsive'></div>
						</li>
					<?php endwhile; ?>

				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Slider -->
	</div>
	<!--main-content-->
	<div class="agile-main" id="about">
		<div class="container">
			<!--about-->
			<div class="about">
				<h2>About college</h2>
				<h4>Sir C Ramalinga Reddy Polytechnic is the first Polytechnic College in private sector in Andhra
					Pradesh sanctioned and recognized by All India Council for Technical Education (AICTE). This College
					is permanently affiliated to SBTET Since inception.</h4>
				<p>Since its inception in 1980, Sir Sir C Ramalinga Reddy Polytechnic has been a premier institute for
					quality Polytechnic education in Andhra Pradesh under the stewardship of its broad minded and
					magnanimous management. The last four decades has seen the Institute fulfilling its motto of
					'QUALITY SERVICE & VALUE BASED EDUCATION' to the student community.</p>
				<p>Adhering to its core values, the institute gives top priority to ethical values and high standards
					and a commitment to value based education. We believe in working honestly and sincerely, in building
					trust and in maintaining a long lasting relationship with the Society. Our team comprises of highly
					qualified and motivated faculty. Core competence and a friendly but efficient work culture play an
					important role in our overall achievements.
				</p>
				<a href="./about.php">Read More...</a>


			</div>
			<div class="clearfix"></div>
			<!--//about-->
		</div>
	</div>
	<!--meet our management-->
	<div class="team" id="facility">
		<div class="container">
			<h3>Facilities@CRR</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
			<div class="w3grids">

				<?php
				while ($row2 = mysqli_fetch_array($faciltyresult)) :;
				?>
					<div class="w3grid col-md-3">
						<img src="<?php echo $image_url ?>/<?php echo $row2['Image'] ?>" alt="team1" class="">
						<h5><?php echo $row2['Title'] ?></h5>
						<p><?php echo $row2['Sub_Title'] ?></p>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//meet our management-->

	<!--welcome-->
	<div class="w3l-welcome">
		<div class="container">
			<div class=" agile-welcome">
				<div class="text-w3">
					<h4>Latest Events & News</h4>
					<p>Lorem Ipsum is simply dummy text</p>
				</div>
				<div class="grids">
					<?php while ($row4 = mysqli_fetch_array($newsresult)) :; ?>
						<div class="grid">
							<div class="icons">
								<!-- <i class="fa fa-book" aria-hidden="true"></i> -->
								<img src="<?php echo $image_url ?>/<?php echo $row4['Image'] ?>" alt="">
							</div>
							<div class="text">
								<h5><?php echo $row4['Title'] ?></h5>
								<p><?php echo $row4['Sub_Title'] ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="w3-img">
					<img src="images/WhatsApp Image 2023-03-20 at 6.55.12 PM.jpeg" alt="image" />
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//welcome-->

	<!--activities-->
	<div class="gallery" id="activities">
		<div class="container">
			<div class="gallery-main">
				<div class="gallery-top">
					<h3>our gallery</h3>
				</div>
				<div class="gallery-bott">

					<?php while ($row3 = mysqli_fetch_array($galleryresult)) :; ?>

						<div class="col-md-4 col1 gallery-grid">
							<a href="images/g1.jpg" class="b-link-stripe b-animate-go  thickbox">

								<figure class="effect-bubba">
									<img src="<?php echo $image_url ?>/<?php echo $row3['Image'] ?>" alt="team1" class="">
									<figcaption>
										<h4 class="gal"><?php echo $row3['Title'] ?></h4>
										<p class="gal1"><?php echo $row3['Sub_Title'] ?></p>
									</figcaption>
								</figure>
							</a>
						</div>

					<?php endwhile; ?>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//activities-->

	<!-- opening -->
	<div class="agile-open">
		<div class="open-head">
			<h6>Sir C R Reddy Polytechnic</h6>
			<p>“Numbers speak every thing.” </p>
		</div>
		<!-- Countdown-timer -->

		<div class="examples">
			<div class="simply-countdown-losange" id="simply-countdown-losange">
				<div class="simply-section">
					<div>
						<span class="simply-amount">7</span>
						<span class="simply-word">Departments</span>
					</div>
				</div>
				<div class="simply-section">
					<div>
						<span class="simply-amount">1800</span>
						<span class="simply-word">Studentss</span>
					</div>
				</div>
				<div class="simply-section">
					<div>
						<span class="simply-amount">100</span>
						<span class="simply-word">Staff</span>
					</div>
				</div>
				<div class="simply-section">
					<div>
						<span class="simply-amount">1980</span>
						<span class="simply-word">Estd</span>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<!-- //Countdown-timer -->

		<script>
			var d = new Date(new Date().getTime() + 48 * 120 * 120 * 2000);

			// default example
			simplyCountdown('.simply-countdown-one', {
				year: d.getFullYear(),
				month: d.getMonth() + 1,
				day: d.getDate()
			});

			// inline example
			simplyCountdown('.simply-countdown-inline', {
				year: d.getFullYear(),
				month: d.getMonth() + 1,
				day: d.getDate(),
				inline: true
			});

			//jQuery example
			$('#simply-countdown-losange').simplyCountdown({
				year: d.getFullYear(),
				month: d.getMonth() + 1,
				day: d.getDate(),
				enableUtc: false
			});
		</script>


	</div>

	<!--contact-->
	<div class="agile-contact" id="contact">
		<div class="left-contact">

			<h6>contact us</h6>
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">principal.crrpoly@gmail.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>9912342028
				</li>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>VATLURU, ELURU,
					<span>ANDHRA PRADESH 534007</span>
				</li>
			</ul>

		</div>
		<div class="right-contact">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3821.6109981535833!2d81.0520487!3d16.6963385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3613473fffffff%3A0x4f380aae64ee8309!2sSir%20C%20Ramalinga%20Reddy%20Polytechnic!5e0!3m2!1sen!2sin!4v1679290982425!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<?php
				if (!empty($_POST['submit'])) {
					$first_name = $_POST['first_name'];
					$Email = $_POST['Email'];
					$message = $_POST['message'];
					$toEmail = "principal.crrpoly@gmail.com";

					$mailHeaders = "Name: " . $first_name .
						"\r\nEmail: " . $Email .
						"\r\nmessage: " . $message . "\r\n";

					if (mail($toEmail, $first_name, $mailHeaders)) {
						$message = "Your Information is received successfull !";
					}
				}
				?>
				<form action="" method="post">
					<input placeholder="Name" name="first_name" class="name" type="text" required=""><br>
					<input placeholder="E-mail" name="Email" class="name" type="text" required=""><br>
					<textarea placeholder="Message" name="message"></textarea><br>
					<input type="submit" name="submit" value="submit">
					<?php if (!empty($message)) { ?>
						<div class="success">
							<strong style="background-color: red;"><?php echo $message; ?></strong>
						</div>
					<?php } ?>
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<?php include 'footer.php'; ?>
	<script type="text/javascript">
		$(document).ready(function() {

			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
</body>

</html>