<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>C.R.R. Polytechnic</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Education Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<!-- //css files -->
	<!-- online-fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=latin-ext,vietnamese"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900iSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.gallery-grid a').Chocolat();
		});
	</script>

	<!-- //js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>


	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->



</head>

<body>
	<div class="hlo">
		<div class="d-flex clgLogo">
			<img src="./clgImages/CRRlogo.jpeg" alt="">
			<div class="text-center navbarClgName">
				<h2>Sir C.R.R. Polytechnic</h2>
				<p>VATLURU, ELURU,</p>
				<p>ANDHRA PRADESH 534007</p>
			</div>
		</div>
		<div class="collapse navbar-collapse links" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="./index.html">Home</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#about">About</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#">Academics</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#">Departments</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#facility">Facilities</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#">Placements</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#">Campus life</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link scroll" href="#contact">Contact us</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="header" id="home">

		<div class="logo">
			<a href="#">
				<!-- <h1>C.R.R. POLYTECHNIC</h1> -->
			</a>
		</div>
		<!-- navigation -->
		<!-- <div class="ban-top-con">
			<div class="top_nav_left">
				<nav class="navbar navbar-default navBar">
					<div class="container-fluid">
						Brand and toggle get grouped for better mobile display
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						Collect the nav links, forms, and other content for toggling
						<div class="collapse navbar-collapse menu--shylock headerLinks"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active menu__item menu__item--current"><a class="menu__link"
										href="index.html">Home <span class="sr-only">(current)</span></a></li>
								<li class=" menu__item"><a class="menu__link scroll" href="#about">About</a></li>
								<li class=" menu__item"><a class="menu__link scroll" href="#management">Academics</a>
								</li>
								<li class=" menu__item"><a class="menu__link scroll" href="#activities">Departments</a>
								</li>
								<li class=" menu__item"><a class="menu__link scroll" href="#faculties">Facilities</a>
								</li>
								<li class=" menu__item"><a class="menu__link scroll" href="#contact">Placements</a></li>
								<li class=" menu__item"><a class="menu__link scroll" href="#contact">Campus life</a>
								</li>
								<li class=" menu__item"><a class="menu__link scroll" href="#contact">Contact us</a></li>

							</ul>
						</div>
					</div>
				</nav>

			</div>
			<div class="clearfix"></div>
		</div> -->
		<!-- //navigation -->
		<!-- Slider -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img">
							<img src="clgImages/seminarHall/seminar.jpg" class="img-responsive" alt="education">
						</div>
						<!-- <div class="slider-info">
							<h3>C.R.R. Polytechnic</h3>
							<p>VATLURU, ELURU, ANDHRA PRADESH 534007</p>

						</div> -->
					</li>
					<li>
						<div class="slider-img">
							<img src="clgImages/seminarHall/seminarScnd.jpg" class="img-responsive" alt="education">
						</div>
						<!-- <div class="slider-info">
							<h3>C.R.R. Polytechnic</h3>
							<p>VATLURU, ELURU, ANDHRA PRADESH 534007</p>
						</div> -->
					</li>
					<li>
						<div class="slider-img">
							<img src="clgImages/campusPhots/ground.jpg" class="img-responsive" alt="education">
						</div>
						<!-- <div class="slider-info">
							<h3>C.R.R. Polytechnic</h3>
							<p>VATLURU, ELURU, ANDHRA PRADESH 534007</p>
						</div> -->
					</li>
					<li>
						<div class="slider-img">
							<img src="clgImages/campusPhots/maingate.jpg" class="img-responsive" alt="education">
						</div>
						<!-- <div class="slider-info">
							<h3>C.R.R. Polytechnic</h3>
							<p>VATLURU, ELURU, ANDHRA PRADESH 534007</p>
						</div> -->
					</li>
					<li>
						<div class="slider-img">
							<img src="clgImages/library/Library.jpg" class="img-responsive" alt="education">
						</div>
						<!-- <div class="slider-info">
							<h3>C.R.R. Polytechnic</h3>
							<p>VATLURU, ELURU, ANDHRA PRADESH 534007</p>
						</div> -->
					</li </ul>
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
				<!-- <img src="images/su.jpg" alt="sucess"> -->
				<p>Since its inception in 1980, Sir Sir C Ramalinga Reddy Polytechnic has been a premier institute for
					quality Polytechnic education in Andhra Pradesh under the stewardship of its broad minded and
					magnanimous management. The last four decades has seen the Institute fulfilling its motto of
					'QUALITY SERVICE & VALUE BASED EDUCATION' to the student community.</p>
				<p>Adhering to its core values, the institute gives top priority to ethical values and high standards
					and a commitment to value based education. We believe in working honestly and sincerely, in building
					trust and in maintaining a long lasting relationship with the Society. Our team comprises of highly
					qualified and motivated faculty. Core competence and a friendly but efficient work culture play an
					important role in our overall achievements.</p>
				<p>The College is situated near Vatluru railway gate in Eluru, the Head Quarters of West Godavari
					district. It is surrounded by beautiful paddy fields and is on Chennai-Howrah highway and train
					route. A large number of buses and trains run via this town. It is easily accessible from any part
					of the country by rail as well as road.</p>
				<p>The College is located in its own sprawling campus with an area of 11.19 acres. Its magnanimous
					infrastructure and greenery attracts the attention of people who pass by. The vast green campus
					housing several Departments provides a stimulating environment to the high caliber staff and
					students of the institution.
					The Campus at Vatluru is a place where students from all walks of life are under a single umbrella
					pursuing their Diploma course.
				</p>
				<h2>vision</h2>
				<p>To switch on the light of Technology amidst the rice bowl of India by taking and giving innovative
					technical ideas.</p>
				<h2> MISSION</h2>
				<p>To impart technical knowledge and skills by users modern engineering tools, to teach ethical and
					professional values and to facilitate. Industry-institute interaction.</p>

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
				<div class="w3grid col-md-3">
					<img src="clgImages/PlacementsBanner.jpg" alt="team1" class="">
					<h5>Placements</h5>
					<p>Participation of experts from industries.</p>
					<!-- <div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div> -->
				</div>
				<div class="w3grid col-md-3">
					<img src="clgImages/campusPhots/campus.jpg" alt="team1" class="img2-w3l">
					<h5>Campus</h5>
					<p>The Institute has given well importance to the sports activities.</p>
					<!-- <div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div> -->
				</div>
				<div class="w3grid col-md-3">
					<img src="clgImages/library/Library.jpg" alt="team1" class="img3-w3l">
					<h5>Library</h5>
					<p>The library provides very calm and quite atmosphere.</p>
					<!-- <div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div> -->
				</div>
				<div class="w3grid col-md-3">
					<img src="clgImages/hostel/hostalimg.jpg" alt="team1" class="img4-w3l">
					<h5>Hostel</h5>
					<p>The hostel is maintained in a homely atmosphere.</p>
					<!-- <div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div> -->
				</div>
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
					<div class="grid">
						<div class="icons">
							<i class="fa fa-book" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h5>ROBOTICS WORKSHOP</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
					<div class="grid">
						<div class="icons">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h5>ROBOTICS WORKSHOP</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
					<div class="grid">
						<div class="icons">
							<i class="fa fa-table" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h5>ROBOTICS WORKSHOP</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>

					<div class="grid">
						<div class="icons">
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h5>ROBOTICS WORKSHOP</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
				</div>
				<div class="w3-img">
					<img src="images/abt.png" alt="image" />
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
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g1.jpg" class="b-link-stripe b-animate-go  thickbox">

							<figure class="effect-bubba">
								<img class="img-responsive gallery_clg" src="images/campus3.jpg" alt="">
								<figcaption>
									<h4 class="gal">C.R.R. Polytechnic</h4>
									<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live
										forever.” </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g2.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive gallery_clg" src="images/campus4.jpg" alt="">
								<figcaption>
									<h4 class="gal">C.R.R. Polytechnic</h4>
									<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live
										forever.” </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g3.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive gallery_clg" src="images/campus6.jpg" alt="">
								<figcaption>
									<h4 class="gal">C.R.R. Polytechnic</h4>
									<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live
										forever.” </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g4.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive gallery_clg" src="images/campus5.jpg" alt="">
								<figcaption>
									<h4 class="gal">C.R.R. Polytechnic</h4>
									<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live
										forever.” </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g5.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive gallery_clg" src="images/g6.jpg" alt="">
								<figcaption>
									<h4 class="gal">C.R.R. Polytechnic</h4>
									<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live
										forever.” </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g6.jpg" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive gallery_clg" src="images/g9.jpg" alt="">
								<figcaption>
									<h4 class="gal">C.R.R. Polytechnic</h4>
									<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live
										forever.” </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<!-- <div class="col-md-4 col1 gallery-grid">
						<a href="images/g7.jpg" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/campus3.jpg" alt="">
							<figcaption>
								<h4 class="gal">Education Hub</h4>
								<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live forever.” </p>	
							</figcaption>			
						</figure>
						</a>
					</div> -->
					<!-- <div class="col-md-4 col1 gallery-grid">
						<a href="images/g8.jpg" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/campus4.jpg" alt="">
							<figcaption>
								<h4 class="gal">Education Hub</h4>
								<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live forever.” </p>	
							</figcaption>			
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g9.jpg" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g9.jpg" alt="">
							<figcaption>
								<h4 class="gal">Education Hub</h4>
								<p class="gal1">“Live as if you were to die tomorrow. Learn as if you were to live forever.” </p>	
							</figcaption>			
						</figure>
						</a>
					</div> -->
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//activities-->

	<!-- opening -->
	<div class="agile-open">
		<div class="open-head">
			<h6>our university opening in</h6>
			<p>“A university is just a group of buildings gathered around a library.” </p>
		</div>
		<!-- Countdown-timer -->

		<div class="examples">
			<div class="simply-countdown-losange" id="simply-countdown-losange"></div>
		</div>

		<div class="clearfix"></div>

		<!-- //Countdown-timer -->

		<!-- Custom-JavaScript-File-Links -->
		<!-- Countdown-Timer-JavaScript -->
		<script src="js/simplyCountdown.js"></script>
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

		<!-- //Countdown-Timer-JavaScript -->
		<!-- //Custom-JavaScript-File-Links -->
	</div>
	<!--// opening -->

	<!--faculty-->
	<div class="w3-faculty" id="faculties">
		<div class="container">
			<div class="faculty-head">
				<h5>our great faculties</h5>
				<p>“Books are the quietest and most constant of friends; they are the most accessible and wisest of
					counselors, and the most patient of teachers.” </p>
			</div>
			<div class="main-faculty">
				<div class="f1 col-md-3 faculty1">
					<ul class="demo-2 effect">
						<li>
							<h3 class="zero">COMPUTER SCIENCE</h3>
							<p class="zero">Lorem ipsum dolor sit amet.</p>
						</li>
						<li><img class="top" src="images/faculty1.jpg" alt="" /></li>
					</ul>
					<h4>Dr. Taruna Gautam</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="social-icons">
						<i class="s1 fa fa-facebook" aria-hidden="true"></i>
						<i class="s2 fa fa-twitter" aria-hidden="true"></i>
						<i class="s3 fa fa-google" aria-hidden="true"></i>
					</div>
				</div>
				<div class="f2 col-md-3 faculty1">
					<ul class="demo-2 effect">
						<li>
							<h3 class="zero">COMMUNICATION SKILLS</h3>
							<p class="zero">Lorem ipsum dolor sit amet.</p>
						</li>
						<li><img class="top" src="images/faculty2.jpg" alt="" /></li>
					</ul>
					<h4>Professor Dr. Ravi</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="social-icons">
						<i class=" s1 fa fa-facebook" aria-hidden="true"></i>
						<i class=" s2 fa fa-twitter" aria-hidden="true"></i>
						<i class=" s3 fa fa-google" aria-hidden="true"></i>
					</div>
				</div>
				<div class="f3 col-md-3 faculty1">
					<ul class="demo-2 effect">
						<li>
							<h3 class="zero">GENERAL SCIENCE</h3>
							<p class="zero">Lorem ipsum dolor sit amet.</p>
						</li>
						<li><img class="top" src="images/faculty3.jpg" alt="" /></li>
					</ul>
					<h4>Ms. Juli Yadav</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="social-icons">
						<i class=" s1 fa fa-facebook" aria-hidden="true"></i>
						<i class=" s2 fa fa-twitter" aria-hidden="true"></i>
						<i class=" s3 fa fa-google" aria-hidden="true"></i>
					</div>
				</div>
				<div class="f4 col-md-3 faculty1">
					<ul class="demo-2 effect">
						<li>
							<h3 class="zero">MATHEMATICS</h3>
							<p class="zero">Lorem ipsum dolor sit amet.</p>
						</li>
						<li><img class="top" src="images/faculty4.jpg" alt="" /></li>
					</ul>
					<h4>Mr. Vikas Singh</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="social-icons">
						<i class="s1 fa fa-facebook" aria-hidden="true"></i>
						<i class="s2 fa fa-twitter" aria-hidden="true"></i>
						<i class="s3 fa fa-google" aria-hidden="true"></i>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>

		</div>
		
	</div>
	<div class="about society">

		<h2 class="text-center">About Society</h2>
		<h4 class="text-center">SIR CATTAMANCHI RAMALINGA REDDY EDUCATIONAL INSTITUTIONS</h4>
		<p>In the 1940s there was a long felt need for a full fledged college in the Head Quarters of West
			Godavari District. This need was fulfilled when late Sri Rao Saheb Damaraju Venkata Rao, the then
			chairman of the Municipal Council, Eluru, took the initiative in 1944. The Municipal Council under
			his stewardship enlisted the sympathy and support of the philanthropic citizens in and around Eluru
			and embarked on a
			collection drive and deposited Rs.2 lakh 17 thousand in the Municipal Treasury as an earmarked fund
			for the starting of the college. <br>
			The college was inaugurated on 4th July 1945 by Sir Cattamanchi Ramalinga Reddy, the distinguished
			educationist and the then Vice Chancellor, Andhra University and the college was named after him as
			"Sir C.R.Reddy Municipal College". It started functioning as a second grade college, with Sri.
			Subrahmanyam as the Founder Principal. <br>
			A constitution was adopted for the Governing Body in the year 1947, according to which the word
			"Municipal" was dropped from the original name of the college. The name of the College was treated
			as an institution under Private Management by the Government from 1947. <br>
			The College was raised to the status of First Grade with effect from July 1951 when the University
			granted affiliation for B.Sc Physics (Main) and B.Com Courses. The College was granted further
			affiliation in Degree Courses for B.A. (Mathematics) and B.A. which were started in July 1954. <br>
			The College opened the Pre-University course with effect from July 1957 and three Year Degree Course
			from June 1958. Subsequently two year Intermediate course was started in the year 1969-70. Degree
			course under the New Scheme with one main and two ancillaries was introduced from the academic year
			1971. <br>
			With the help of the philanthropic benefactors, the infrastructure of the college was developed and
			the Management then felt it proper to start Post Graduate Courses in the College, which were started
			in the year 1971, followed by Evening College for the employees who wish to improve their
			qualification. <br>
			The Management sincerely felt that the opening of Law Course in the Evening College would help
			improve the qualification of many graduates. As a result BL Course was started in evening college in
			1976-77 and in Day College in 1980.
			The Management was of the view that some technical and professional courses should be started to
			provide better employment avenues for the students of this region. <b>This dream came true when they
				started a Polytechnic in 1980.</b> <br>
			The Management's desire to start a College of Education to train and mould the graduates into ideal
			teachers took shape in 1984 when B.Ed Course was started.
			A Public School was started by the Management with the intention of providing better educational
			facilities to the children of this town.
			<br>
			The College has become a premier educational institution in Andhra Pradesh. It has grown to be a
			Mini-University. Considering the all round development and the infrastructural facilities available
			in the college, the Management was encouraged to apply for the conferment of the Autonomous status
			and on May 11, 1987 the U G C accorded the status of autonomy to Sir C.R.Reddy College. <br>
			The Management started a Women's College in 1987 to cater to the needs of the growing women
			population in and around Eluru, seeking higher education.
			Realizing that there is a great demand for engineering education in these parts the Management
			started an Engineering College in 1989. <br>
			Keeping in view the demand in Pharmaceutical Sciences, the Management started Sir C.R.Reddy College
			of Pharmaceutical Sciences in November 2007. <br>
			Sri Alluri Bapineedu had been the President of the Governing Body for about three decades and was
			mainly responsible for the phenomenal growth and development of the college. He had been a source of
			strength and inspiration to the Management, Principal, staff and students. Sri A S Chowdary stepped
			into the shoes of his father in 1992. Sri VVN Prasad acted as Correspondent and Secretary for more
			than two decades and involved himself actively in the smooth administration bringing out the growth
			and development of our institutions till 2003. Later, Sri Gutta Subba Rao acted as secretary till
			the end of the tenure of the committee. In 2007, the Managing Committee of Sir C.R.Reddy Group of
			Institutions took charge. Sri Kommareddy Rambabu and Sri Kakarala Rajendra Vara Prasada Rao took
			charge as President and Secretary respectively.In 2010 Sri Chava Rama Krishna Rao, an educationist
			and a veteran politician took charge as President and Sri Kakarala Rajendra Vara Prasada Rao was
			reelected as Secretary. <br>
			The present Governing Body under the dynamic leadership of Sri Alluri Indra Kumar took office. We
			hope the present body with its rich and varied experience and strong commitment would certainly
			sustain its growth and development and add many more feathers in its cap in the coming years with Dr
			MBSV Prasad as Secretary.



		</p>
	</div>
	<!--//faculty-->

	<!--contact-->
	<div class="agile-contact" id="contact">
		<div class="left-contact">

			<h6>contact us</h6>
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a
						href="mailto:info@example.com">CRRpolytechnic.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>+2158 85467</li>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>VATLURU, ELURU,
					<span>ANDHRA PRADESH 534007</span>
				</li>
			</ul>

		</div>
		<div class="right-contact">
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56049.676313757824!2d77.31281919999999!3d28.5966336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1675858667613!5m2!1sen!2sin"
					frameborder="0" style="border:0" allowfullscreen></iframe>
				<!-- <iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5662244.714693903!2d-2.279153484594319!3d46.13545249359953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sIndia!5e0!3m2!1sen!2sin!4v1471606088687"
					frameborder="0" style="border:0" allowfullscreen></iframe> -->
				<form action="#" method="post">
					<input placeholder="Name" name="Name" class="name" type="text" required=""><br>
					<input placeholder="E-mail" name="Name" class="name" type="text" required=""><br>
					<textarea placeholder="Message"></textarea><br>
					<input type="submit" value="send message">
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!--//contact-->
	<!--//main-content-->

	<!--footer-->
	<!-- <div class="w3l-footer">
		<div class="container">
			<div class="left-w3">
				<a href="#">Sir C.R.R. Polytechnic</a>
			</div>
			<div class="right-social">
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-google-plus-square" aria-hidden="true"></i>
			</div>
			<div class="clearfix"></div>


			<div class="footer-container">
				<div class="quick">
					<h3>Quick links</h3>
					<a href="#">SBTET Notifications</a>
					<a href="#">SBTET Notifications</a>
				</div>
				<div class="quick">
					<h3>Connect with Us</h3>
					<a href="#">Twitter</a>
					<a href="#">Facebook
					</a>
					<a href="#">Instagram</a>
				</div>
				<div class="quick">
					<h3>Mailing Address</h3>
					<a href="#">123 Anywhere St., Any City</a>
					<a href="#">State, Country 12345</a>
					<h3>Email Address</h3>
					<a href="#">CRR@gmail.com</a>
					<a href="#">State, Country 12345</a>
					<h3>Phone Number</h3>
					<a href="#">(123) 456 7890</a>
					<a href="#">State, Country 12345</a>
				</div>
			</div>


			<div class="footer-nav">
				<ul>
					<li><a class="menu__link scroll" href="#home">home</a></li>
					<li><a class="menu__link scroll" href="#about">about</a></li>
					<li><a class="menu__link scroll" href="#management">management</a></li>
					<li><a class="menu__link scroll" href="#activities">activities</a></li>
					<li><a class="menu__link scroll" href="#faculties">faculties</a></li>
					<li><a class="menu__link scroll" href="#contact">contact</a></li>
				</ul>
			</div>
			<div class="copyright-agile">
				<p>&copy; Designed by Aacharya. All rights resrved by Sir CRR Polytech @2023 <a
						href="https://www.aacharya.net/">Aacharya</a></p>
			</div>
		</div>
	</div> -->
	<!--//footer-->
	<!-- smooth scrolling -->

	<div style="background-color: #0c274d; padding: 48px 20px 28px 48px;" id="contact">
		<div class="row">
			<div class="col-md-5 crrfooter">
				<h1 class="text-light">Sir C.R.R. Polytechnic</h1>
				<p style="color:#bfbd22;  margin: 0;">VATLURU, ELURU,</p>
				<p style="color:#bfbd22; ">ANDHRA PRADESH 534007</p>
			</div>
			<div class="col-md-2 ">
				<h3 style="color:#bfbd22; " class=" quick">Quick links</h3>
				<div class="links-footerDiv"> <a href="#" style="text-decoration:none; color: white;">SBTET
						Notifications</a></div>
				<div class="links-footerDiv"><a href="#" style="text-decoration:none; color: white;">SBTET Results</a>
				</div>
			</div>
			<div class="col-md-2 ">
				<h3 style="color:#bfbd22; " class="quick">Connect with Us</h3>
				<div class="links-footerDiv"> <a href="#" style="text-decoration:none; color: white;">Twitter</a></div>
				<div class="links-footerDiv"> <a href="#" style="text-decoration:none; color: white;">Facebook</a></div>
				<div class="links-footerDiv"> <a href="#" style="text-decoration:none; color: white;">Instagram</a>
				</div>

			</div>
			<div class="col-md-2">
				<h3 style="color:#bfbd22; " class=" mail quick">Mailing Address</h3>
				<p class="footer_para links-footerDiv">123 Anywhere St., Any City
					State, Country 12345</p>
				<h3 style="color:#bfbd22;" class="quick">Email Address</h3>

				<p class="footer_para links-footerDiv">hello@reallygreatsite.com</p>
				<h3 style="color:#bfbd22; " class="quick">Phone Number</h3>
				<p class="footer_para links-footerDiv">(123) 456 7890</p>

			</div>

		</div>
		<p class="text-center copy_right">Designed by Aacharya. All rights resrved by Sir CRR Polytech @2023</p>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
</body>

</html>