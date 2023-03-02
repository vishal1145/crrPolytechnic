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
					<a class="nav-link menu__link " href="./academy.php">Academics</a>
				</li>
				<li class="nav-item menu__item">
					<a class="nav-link menu__link " href="./department.php">Departments</a>
				</li>
				<li class="nav-item menu__item">
					<div class="dropdown show">
					<a class="nav-link menu__link btn btn-secondary dropdown-toggle" href="./facilities.php">
						Facilities
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">Hostel</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item1" href="#">Something</a>
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
<!-- <script>
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
</script> -->

</body>
</html>