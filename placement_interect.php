<html lang="en">
<head>
   
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

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
        <h3 class="item_title">Industry Institute Interaction Cell</h3>
        <div class="newClass">
            <h3 class="item_title forcolor">The Functions of Industry Interaction Cell include</h3>
        ​
        <ol style="list-style: auto; padding:0px 15px;" type="1" >
        <li>To give industrial exposure to Faculty members and students, thus enabling them to
            tune their knowledge to cope with the industrial culture</li>
        <li>Encouraging Engineers from industries to visit institution to deliver lectures</li>
        <li>Participation of experts from industries.</li>
        <li>To organize industrial visits for Faculty members and students</li>
        <li>To encourage Faculty members to use their expertise in solving the problems faced
            by the industries, thus creating opportunity for consultancy</li>
        <li>Industrial testing by Faculty and technician at site, or in laboratory</li>
        <li>To organize in-plant training for the students</li>
        <li>To identify the areas for executive development programmes in the areas of recent
            technological advances</li>
        <li>To assist the Departments in organizing workshops, conferences and symposia with
            joint participation of the industries</li>
        <li>To assist the Departments in establishing rapport with industries for taking up mini
            projects and projects</li>
        <li>To assist the Training and Placement Division</li>
        <li>Visiting faculty from industries</li>
        </ol> 

        </div>
    </div>
</div>
</div>
<style>
    ol li{
        margin-bottom: 10px;
    }
</style>
</div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>

</body>
</html>
