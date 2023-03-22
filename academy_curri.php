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
    <div class="container height">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">Academics</h3>
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
         <h3 class="item_title">Curricillum</h3>
         <div class="newClass"   style="padding-top:3px;">
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th scope="col">S.NO</th>
                     <th scope="col">NAME OF THE COURSES</th>
                     <th scope="col" >R20 REGULATION</th>
     
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>Electronics & Communication Engineering</td>
                     <td>
                        <a download href="./pdf/C-20 ECE.pdf">Download</a>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">2</th>
                     <td>Electrical & Electronics Engineering</td>
                     <td>                        <a download href="./pdf/C-20 EEE.pdf">Download</a>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">3</th>
                     <td>Mechanical Engineering</td>
                     <td>                        <a download href="./pdf/C-20 MECHANICAL ENGG.pdf">Download</a>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">4</th>
                     <td>Civil Engineering</td>
                     <td>                        <a download href="./pdf/C-20 CIVIL.pdf">Download</a>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">5</th>
                     <td>Diploma In Computer Engineering</td>
                     <td>                        <a download href="./pdf/C-20 COMPUTER ENGINEERING.pdf">Download</a>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">6</th>
                     <td>Diploma In AI AND ML ENGINEERING</td>
                     <td><a download href="./pdf/C-20 AIM.pdf">Download</a>
                     </td>
                 </tr>   
                 <tr>
                     <th scope="row">7</th>
                     <td>Diploma In CCN ENGINEERING</td>
                     <td><a download href="./pdf/C-20 CCN.pdf">Download</a>
                     </td>
                 </tr>              
             </tbody>
         </table>
         </div>
        </div>
     </div>
     </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>

</body>
</html>