<html lang="en">
<head>
   
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css">
    <link href=".././css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
	include './header.php';
	?>
    
    <div class="container height">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">MECHANICAL ENGINEERING </h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="mechepartment.php">
                            <span><i class="fa-solid fa-play"></i></span>
                            ME Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('eeeteachingfaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ME Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('eeenonTeachingFaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ME-Non Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('cseLibrary.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Department Library
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('eeeStudentInfo.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Student Info
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('eeeGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Gallery
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('carrerOppoEEE.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Carrer Opportunities
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
            <div class="rightside">
                <h3 class="item_title">About Department</h3>
                <div class="newClass">
                
				<p>
                Mechanical Engineering is a diverse and exciting field that involves designing, developing, and maintaining various mechanical systems and components. Some of the rare and highly specialized branches within this field include:
				</p><br>
                
                </div>
            </div>
        </div>
       </div>
    </div>
   
    <?php include './footer.php' ?>
    <script src="./script.js"></script>
    
</body>
</html>

