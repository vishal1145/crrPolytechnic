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
               <h3 class="module_title">EEE</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="eeeDepartment.php">
                            <span><i class="fa-solid fa-play"></i></span>
                            EEE Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('eeeteachingfaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            EEE Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('eeenonTeachingFaculty.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            EEE-Non Teaching Faculty
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
                Electrical and Electronics Engineering (EEE) is a highly specialized and dynamic field that 
                combines the principles of electricity, electronics, and electromagnetism to design and develop 
                innovative technology solutions. With a focus on design, analysis, and troubleshooting, EEE 
                provides students with a strong foundation in the latest electrical systems and applications, 
                including renewable energy systems, power electronics, communication systems, and control systems. 
                The best EEE programs offer hands-on experience with cutting-edge equipment and technology, providing 
                students with a well-rounded education that prepares them for a successful career in a rapidly growing 
                and in-demand industry.
				</p><br>
                <p>In addition, EEE students are equipped with the skills and knowledge necessary to tackle complex 
                   problems and design innovative solutions that improve the quality of life for individuals and communities. 
                   Graduates of the best EEE programs are in high demand, as they bring a unique blend of technical 
                   and problem-solving skills to a variety of industries, including electrical power systems, 
                   telecommunications, transportation, and aerospace. With a rapidly growing demand for sustainable 
                   and environmentally friendly technology solutions, EEE is a field with a bright future, offering 
                   excellent career opportunities and growth potential for students who are passionate about technology 
                   and making a positive impact in the world.
                </p><br>
                <p>The Department of EEE started the DIPLOMA programme in EEE in the year 1981. The programme 
                   started with an intake of 60 students. The intake was increased to 120 in I first shift and 120 in 
                   the second shift. The DIPLOMA.programme in EEE  has an average intake of 240 students per year. 
                   The EEE Department is dedicated towards imparting quality education to the students towards industry needs.
                </p><br>
                <p>The programme is supported by good infrastructure facilities. The.programme has good 
                   placement records every year. About 55% of the students pursue higher studies.</p>
                </div>
            </div>
        </div>
       </div>
    </div>
   
    <?php include './footer.php' ?>
    <script src="./script.js"></script>
    
</body>
</html>

