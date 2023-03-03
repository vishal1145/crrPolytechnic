<html lang="en">
<head>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">Courses offered</a>
						<a class="dropdown-item" href="#">Curricillum</a>
						<a class="dropdown-item" href="#">Results</a>
						<a class="dropdown-item" href="#">Notification</a>
						<a class="dropdown-item1" href="#">Polycet Previous Papers</a>

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
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">Class Rooms</a>
						<a class="dropdown-item" href="#">Seminar Hall</a>
						<a class="dropdown-item" href="#">Library</a>
						<a class="dropdown-item" href="#">Sports & Games</a>
						<a class="dropdown-item" href="#">Transportation</a>
						<a class="dropdown-item" href="#">Hostels</a>
						<a class="dropdown-item" href="#">Canteen</a>
						<a class="dropdown-item" href="#">Browsing Center</a>
						<a class="dropdown-item" href="#">Language Lab</a>
						<a class="dropdown-item1" href="#">Water Purification System</a>
					</div>
					</div>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link" href="./placement.php">Placements</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link" href="./campus.php">Campus life</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link " href="#contact">Contact us</a>
				</li>
			</ul>
		</div>
</div>
<script>
				const $dropdown = $(".dropdown");
				const $dropdownToggle = $(".dropdown-toggle");
				const $dropdownMenu = $(".dropdown-menu");
				const showClass = "show";
				$(window).on("load resize", function() {
				if (this.matchMedia("(min-width: 768px)").matches) {
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