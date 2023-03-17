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
               <h3 class="module_title">CS And Engineering</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="ceDepartment.php">
                            <span><i class="fa-solid fa-play"></i></span>
                            CSE Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('cseteachingfaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            CSE Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('csenonTeachingFaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            CSE-Non Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('cseLibrary.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Department Library
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('csStudentInfo.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Student Info
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('computerEngGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Gallery
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('carrerOppo.html')">
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
                    Computer Science and Engineering (CSE) is a highly sought after field that combines elements of computer
                    programming, engineering and mathematics to design and develop cutting-edge technology. It is an exciting
                    and rapidly evolving discipline that is transforming the way we live, work, and communicate. CSE students
                    have the opportunity to work on challenging projects that make a real difference in the world, from
                    developing new medical technologies to creating new forms of entertainment and communication. With a strong
                    emphasis on hands-on learning and problem-solving, CSE students are well-prepared to tackle complex challenges
                    and lead the way in innovation and discovery. Whether it be through developing innovative solutions to complex
                    problems or creating new applications and platforms, CSE graduates are equipped with the skills and knowledge
                    necessary to make a positive impact in the world.
				</p><br>
                <p>The field of CSE is not only in high demand, but it also offers a wide range of career opportunities.
                   Graduates of CSE programs can find employment in industries such as software development, cybersecurity,
                   artificial intelligence, robotics, and data analysis, just to name a few. In these roles, CSE graduates
                   work on developing new technologies, solving complex problems, and improving the efficiency and 
                   effectiveness of existing systems. Additionally, many CSE graduates also go on to start their own
                   companies and create their own innovative products and services.
                </p><br>
                <p>In conclusion, if you are interested in technology, problem-solving, and making a difference in the world,
                   then a degree in Computer Science and Engineering is a great choice. It offers a challenging, 
                   and rewarding career path, with endless opportunities to make an impact and drive innovation.
                </p><br>
                <p>The Department of Computer Science & Engineering started the DIPLOMA programme in Computer Science
                   and Engineering in the year <b>1992</b>. The programme started with an intake of 60 students. The intake was
                   increased to 120 in <b>2006</b>.</p>
                </div>
            </div>
        </div>
       </div>
    </div>
   
    <?php include './footer.php' ?>
    <script src="./script.js"></script>
    
</body>
</html>

