<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
<style>
	.barIcon{
		color:#fff;
		font-size:40px;
	}
	.mystyle{
		display:block !important;
	}

	@media(max-width:767px){
		.responsive{
		display:contents !important;
	}
	}
</style>
</head>
<body>
<div class="hlo">
		<div class="forFlex">
		<div class="d-flex clgLogo">
			<img src="./clgImages/CRRlogo.jpeg" alt="">
			<div class="text-center navbarClgName">
				<h2>Sir C.R.R. Polytechnic</h2>
				<p>VATLURU, ELURU,</p>
				<p>ANDHRA PRADESH 534007</p>
			</div>
			
		</div>
		<div class="barIcon"  onclick="myFunction()">
			<i class="fa-solid fa-bars"></i>
			</div>
		</div>
		<div class="collapse navbar-collapse links" id="myDIV">
			<ul class="navbar-nav responsive">
				<li class="nav-item menu__item">
					<a class="nav-link menu__link " href="./index.php">Home</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link " href="./about.php">About</a>
				</li>
				<li class="nav-item menu__item">
					<!-- <a class="nav-link menu__link " href="./academy.php">Academics</a> -->
					<div class="dropdown show">
					<a class="nav-link menu__link btn btn-secondary dropdown-toggle" href="./academy.php">
					Academics
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="dropdown-menu forwidth" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">COURSES OFFERED</a>
						<a class="dropdown-item" href="#">CURRICILLUM</a>
						<a class="dropdown-item" href="#">RESULT</a>
						<a class="dropdown-item" href="#">NOTIFICATION</a>
						<a class="dropdown-item1" href="#">POLYCET PREVIOUS PAPERS</a>

					</div>
					</div>
				</li>
				<li class="nav-item menu__item">
					<!-- <a class="nav-link menu__link " href="./department.php">Departments</a> -->
					<div class="dropdown show">
					<a class="nav-link menu__link btn btn-secondary dropdown-toggle" href="./department.php">
					Departments
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="dropdown-menu forwidth" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">CIVIL ENGINEERING</a>
						<a class="dropdown-item" href="#">COMPUTER ENGINEERING 120</a>
						<a class="dropdown-item" href="#">ELECTRONICS AND COMMUNICATION ENGINEERING</a>
						<a class="dropdown-item" href="#">ELECTRICAL AND ELECTRONICS ENGINEERING</a>
						<a class="dropdown-item" href="#">MECHANICAL ENGINEERING 120</a>
						<a class="dropdown-item" href="#">ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING ENGINEERING</a>
						<a class="dropdown-item1" href="#">COMMUNICATION AND COMPUTER NETWORKS ENGINEERING</a>


					</div>
					</div>
				</li>
				<li class="nav-item menu__item">
					<div class="dropdown show">
					<a class="nav-link menu__link btn btn-secondary dropdown-toggle" href="./facilities.php">
						Facilities
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="dropdown-menu forwidth" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="./facilities.php">CLASS ROOMS</a>
						<a class="dropdown-item" href="#">SEMINAR HALL</a>
						<a class="dropdown-item" href="#">LIBRARY</a>
						<a class="dropdown-item" href="#">SPORTS & GAMES</a>
						<a class="dropdown-item" href="#">TRANSPORTATION</a>
						<a class="dropdown-item" href="#">HOSTELS</a>
						<a class="dropdown-item" href="#">CANTEEN</a>
						<a class="dropdown-item" href="#">BROWSING CENTER</a>
						<a class="dropdown-item" href="#">LANGUAGE LAB</a>
						<a class="dropdown-item1" href="#">WATER PURIFICATION SYSTEM</a>
					</div>
					</div>
				</li>
				<li class="nav-item menu__item">
				<div class="dropdown show">
					<a class="nav-link menu__link" href="./placement.php">
						Placements
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="dropdown-menu forwidth" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">ABOUT T&P</a>
						<a class="dropdown-item" href="#">INTERACTION CELL</a>
						<a class="dropdown-item" href="#">OUR RECRUITERS</a>
					</div>
					</div>
				</li>
				<li class="nav-item menu__item">
				<div class="dropdown show">
					<a class="nav-link menu__link" href="./campus.php">Campus life
					<i class="fa fa-angle-down"></i>
					</a>
					<div class="dropdown-menu forwidth" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">EXTRA CURRICULAR ACTIVITIES</a>
						<a class="dropdown-item" href="#">CO CURRICULAR ACTIVITIES</a>
						<a class="dropdown-item" href="#">ALUMNI ASSOCIATION</a>
						<a class="dropdown-item" href="#">AIMS AND OBJECTIVE</a>
						<a class="dropdown-item" href="#">ALUMNI REGISTRATION</a>
						<a class="dropdown-item" href="#">ALUMNI DIRECTORY</a>
						<a class="dropdown-item" href="#">ALUMNI ACTIVITIES</a>
						<a class="dropdown-item" href="#">EVENTS</a>
						<a class="dropdown-item" href="#">LANGUAGE LAB</a>
						<a class="dropdown-item1" href="#">ANTI RAGGING POLICY</a>
					</div>
					</div>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link " href="./contact.php">Contact us</a>
				</li>
			</ul>
		</div>
</div>
<script>
	function myFunction() {
   var element = document.getElementById("myDIV");
   element.classList.toggle("mystyle");
   element.classList.toggle("responsive");

}




const $dropdown = $(".dropdown");
				const $dropdownToggle = $(".dropdown-toggle");
				const $dropdownMenu = $(".dropdown-menu");
				const showClass = "show";
				$(window).on("load resize", function() {
				if (this.matchMedia("(min-width: 992px)").matches) {
					$dropdown.hover(
					function() {
						const $this = $(this);
						$this.addClass(showClass);
						$this.find($dropdownToggle).attr("aria-expanded", "true");
						$this.find($dropdownMenu).addClass(showClass);
					},
					function() {
						const $this = $(this);
						$this.removeClass(showClass);
						$this.find($dropdownToggle).attr("aria-expanded", "false");
						$this.find($dropdownMenu).removeClass(showClass);
					}
					);
				} else {
					$dropdown.off("mouseenter mouseleave");
				}
				});
</script>
</body>
</html>