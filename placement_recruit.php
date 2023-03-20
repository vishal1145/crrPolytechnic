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
                           
                            Interaction Cell
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('placement_recruit.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Our Recruiters
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
        <div id="demo">
        <div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">List Of Our Recruiters :-</h3>
        <div class="newClass">
        <div class="row">
            <div class="col-md-4">
                <img src="./images/EFFECTRONICS.jpg" alt="">
            </div>
            <div class="col-md-4" style="margin-top: -20px;padding-left: 170px;">
                <img src="./images/vem-technologies-squarelogo-1429873320660.png" alt="">
            </div>
            <div class="col-md-4" style="height: 100px; padding-left: 160px;">
                <img src="./images/Untitled design (19).png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-top: 30px; height: 75px;">
                <img src="./images/ltgrouplogo.jpg" alt="">
            </div>
            <div class="col-md-4" style="padding-left: 85px;height: 100px;">
                <img src="./images/download (3).png" alt="">
            </div>
            <div class="col-md-4" style="padding-left: 85px;height: 100px;">
                <img src="./images/download (1) (1).png" alt="">
            </div>
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
