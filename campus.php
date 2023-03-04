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
    <div class="background">
    <div class="container">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">Campus life</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            Extra Curricular Activities
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('co_curri.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Co Curricular Activities
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('alumni.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Alumni Association
                        </a>
                        <ul class="nav-child unstyled small">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_aims.html')">
                                    <span><i class="fa-solid fa-play"></i></span>
                                    Aims and Objective
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-child unstyled small">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_regist.html')">
                                    <span><i class="fa-solid fa-play"></i></span>
                                    Alumni Registration
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-child unstyled small">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_direct.html')">
                                    <span><i class="fa-solid fa-play"></i></span>
                                    Alumni Directory
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-child unstyled small">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_activ.html')">
                                    <span><i class="fa-solid fa-play"></i></span>
                                    Alumni Activities
                                </a>
                            </li>
                        </ul>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('events.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Events
                        </a>
                      
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('anti_ragg.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Anti Ragging Policy
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
            <div class="rightside">
                <h3 class="item_title">Extra Curricular Activities</h3>
                <div class="newClass">
                
				<p>
                Sports:-<br>
                Full Time Physical Director Is Appointed, To Organize Physical Education Activities In The Polytechnic. IPSGM Sports Meet For Men And
                Women Students&#39; Conducted Regularly. CRRPOLY Staff &amp; students Tournament Also Organized. The Facilities Available for The Students And
                Staff Are:<br>
               
                </p><br>
                <ul class="fordotted" style="padding:0px 15px;">
                    <li class="myclass">Cricket Ground</li>
                    <li class="myclass">Basket Ball Court</li>
                    <li class="myclass">Volley Ball Court</li>
                    <li class="myclass">FootBall Ground</li>
                    <li class="myclass">Ball Badminton Court</li>
                    <li class="myclass">Table Tennis</li>
                    <li class="myclass">Carrom Board</li>
                    <li class="myclass">Chess Board</li>
                    <li class="myclass">Shuttle Badminton Court</li>
                    <li class="myclass">Tennicoit Court</li>
                    <li class="myclass">NSS-COMING SOON</li>
               </ul>
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
 

