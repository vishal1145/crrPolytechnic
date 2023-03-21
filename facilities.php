<html lang="en">
<head>
   
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
	include 'header.php';
	?>
    <div class="background">
    <div class="container height">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">Facilities</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            Class Rooms
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('seminar.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Seminar Hall
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor1" onclick="loadDoc('library.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Library
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('sports.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Sports & Games
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('transport.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Transportation
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('hostel.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Hostels
                        </a>
                      
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('canteen.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Canteen
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('health.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Health Center
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('browsing.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Browsing Center
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('lab.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Language Lab
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('waterpuri.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Water Purification System
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
            <div class="rightside">
                <h3 class="item_title">Class Rooms</h3>
                <div class="newClass">
                
				<p>
                        The classrooms of this institute are will designed with sufficient ventilation
                        and spacious. There are 36 classrooms and each classroom can
                        accommodate 60 students apart from classrooms there are 15 tutorial
                        rooms including PG enabling the students to attend to exercise work
                        assignments. Every Department has its Own E-Class Rooms
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
        <img src="./images/classroom2.jpg"/>
</div>
<div class="col-md-6">
        <img src="./images/classroom3.JPG"/>
</div>
    </div>
        </div>
        
       </div>
      
    </div>
</div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>

</body>
</html>
 

