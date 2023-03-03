<html lang="en">
<head>
   
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<?php
	include 'header.php';
	?>
    <div class="container">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">Placement</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            About T&P
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('interect.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            INTERACTION CELL
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('placement_recruit.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            OUR RECRUITERS
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
        <div id="demo">
        <div class="col-md-9">
            <div class="rightside">
                <h3 class="item_title">About T&P</h3>
                <div class="about">
                
				<p>
                Training &amp; Placement cell functions with an objective of creating ample career opportunities
                for students in reputed Companies. A separate Training &amp; Placement Cell is existing in the
                college and one of the senior members is acting as head of the Training &amp; Placement Cell.
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>

</body>
</html>
