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
    <div class="container height">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">Polycet Exam</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            Courses Offered
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('curricillium.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Curricillum
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('result.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Results
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('notification.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Notification
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('paper.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Polycet Previous Papers
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
        <div class="rightside">
        <h3 class="item_title">The students can check their Polycet Exam Previous Papers using below link.</h3>
         <div class="newClass"   style="padding-top:3px;">
                <h3>
                    <a href="https://sbtet.ap.gov.in/APSBTET/oept1.do">See Polycet Exam Previous Papers </a>
                </h3>
         </div>
        </div>
     </div>
     </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>

</body>
</html>