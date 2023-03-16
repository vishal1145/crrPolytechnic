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
               <h3 class="module_title">ECE</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="eceDepartment.php">
                            <span><i class="fa-solid fa-play"></i></span>
                            ECE Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('eceteachingfaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ECE Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('ecenonTeachingFaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ECE-Non Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('cseLibrary.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Department Library
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('eceStudentInfo.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Student Info
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('eceGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Gallery
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('carrerOppoECE.html')">
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
                Electrical and Computer Engineering (ECE) is a highly in-demand and rapidly evolving field
                that combines elements of electrical engineering and computer science. With a focus on designing
                and improving the electrical and computer systems used in a wide range of industries, ECE
                offers students the opportunity to make a significant impact on the world. From developing new 
                technologies to solving complex problems, the field of ECE is constantly pushing the boundaries of 
                what is possible. With cutting-edge research and the use of advanced technologies, ECE is a field that 
                offers endless possibilities for those who are passionate about innovation and making a difference. 
                Whether you're interested in developing new medical devices, improving communication systems, or 
                creating new energy technologies, ECE is a field that provides you with the tools and knowledge you need 
                to make a real impact.
				</p><br>
                <p>ECE also provides a diverse range of career paths, including opportunities in areas such as 
                   telecommunications, renewable energy, robotics, and artificial intelligence. In addition, 
                   ECE graduates are highly sought after by companies in industries such as aerospace, defense, 
                   and consumer electronics. With its broad range of applications, a degree in ECE can open doors to 
                   exciting and challenging careers across a wide range of industries. Furthermore, the field is constantly 
                   evolving and offers continuous opportunities for professional growth and development. The curriculum 
                   for ECE programs is designed to equip students with both theoretical knowledge and hands-on experience, 
                   ensuring that graduates are well-prepared for the workforce. With its combination of technical expertise 
                   and real-world applications, ECE is a field that offers students a unique opportunity to make a difference and 
                   advance their careers.
                </p>
                </div>
            </div>
        </div>
       </div>
    </div>
   
    <?php include './footer.php' ?>
    <script src="./script.js"></script>
    
</body>
</html>

