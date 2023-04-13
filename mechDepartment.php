<html lang="en">
<head>
   
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css">
    <link href=".././css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    <title>Document</title>
</head>
<body>
<?php
	include './header.php';
	?>
    
    <div class="container height">
        <div class="col-md-3">
            <div class="leftSide">
               <h3 class="module_title">ME</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="mechDepartment.php">
                            <span><i class="fa-solid fa-play"></i></span>
                            ME Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('mech_teachingfaculty.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ME Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('mech_non_teachingfaculty.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ME-Non Teaching Faculty
                        </a>
                   </li>
                   <!-- <li>
                        <a id="myAnchor" onclick="loadDoc('cseLibrary.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Department Library
                        </a>
                   </li> -->
                   <li>
                        <a id="myAnchor" onclick="loadDoc('ME_Student_info.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Student Info
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('megallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Laboratories
                        </a>
                   </li>
                   <!-- <li>
                        <a id="myAnchor" onclick="loadDoc('carrerOppoME.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Carrer Opportunities
                        </a>
                   </li> -->
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
                Mechanical Engineering is a diverse and exciting field that involves designing,
                developing, and maintaining various mechanical systems and components.
                Some of the rare and highly specialized branches within this field include:
				</p><br>
                <ul class="fordotted" style="padding:0px 15px;">
                    <li class="myclass">Mechatronics - combines mechanical, electrical and computer engineering to design and control complex systems.</li>
                    <li class="myclass">Biomechanics - applies the principles of mechanics to study biological systems and improve medical treatments.</li>
                    <li class="myclass">Nanomechanics - focuses on the behaviour of materials and structures at the nanoscale level.</li>
                    <li class="myclass">Energy Systems - deals with the design, development and optimization of energy conversion and utilization systems.</li>
                    <li class="myclass">These branches provide a wealth of opportunities for students to specialize in areas that align with their interests and career goals. With the increasing demand for sustainable and innovative solutions in various industries, graduates with expertise in these rare branches are highly sought after.</li>
                    <li class="myclass">Robotics - involves designing and developing robots for various applications in different industries.</li>
                    <li class="myclass">Aerospace Engineering - deals with the design, development, and production of aircraft and spacecraft.</li>
                    <li class="myclass">Materials Science and Engineering - focuses on the study of materials properties and behavior, and the development of new materials.</li>
                </ul>
                <p> 
                    <h3 class="item_title forcolor">
                        MECHANICAL ENGINEERING
                    </h3>
                </p>
                <ul class="fordotted" style="padding:0px 15px;">
                    <li class="myclass">Mechanical engineering is an engineering discipline that combines engineering physics and mathematics principles with materials science to design, analyze, manufacture, and maintain mechanical systems. It is one of the oldest and broadest of the engineering disciplines.</li>
                    <li class="myclass">The mechanical engineering field requires an understanding of core areas including mechanics, dynamics, thermodynamics, materials science, structural analysis, and electricity. In addition to these core principles, mechanical engineers use tools such as computer-aided design (CAD), computer-aided manufacturing (CAM), and product lifecycle management to design and analyze manufacturing plants, industrial equipment and machinery, heating and cooling systems, transport systems, aircraft, watercraft, robotics, medical devices, weapons, and others. It is the branch of engineering that involves the design, production, and operation of machinery.</li>
                </ul>
                <h3 class="item_title forcolor">Career Opportunities</h3>
                <div class="newClass">
                    <ul class="fordotted" style="padding:0px 15px;">
                        <li class="myclass">The American novelist, James A. Michener, said: “Scientists dream about doing great things. Engineers do them.” This is certainly the case with mechanical engineers. These guys are the people that create and build the machines, tools, equipment and mechanical devices that make the world go round. Sounds pretty important, doesn’t it?</li>
                        <li class="myclass">Mechanical engineering is one of the broadest specialist subsectors in the world of engineering. The skills of mechanical engineers are needed in a huge range of industries, such as robotics, aerospace, defence, manufacturing and civil engineering.</li>
                        <li class="myclass">Mechanical engineers use their creativity, technical skills, practical abilities and scientific knowledge to design, manufacture and maintain every kind of mechanical device imaginable: from small components, such as precise medical devices (e.g. pacemakers), to large machinery, such as cooling systems in nuclear power plants and jet engines in aeroplanes. Their expertise is essential throughout the research, design, planning, production, testing, installation and maintenance of mechanical devices.</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
       </div>
    </div>
   
    <?php include './footer.php' ?>
    <script src="./script.js"></script>
    
</body>
</html>

