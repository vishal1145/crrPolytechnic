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
                   <div id="box"></div>
                   <ul id="menu">
                        <li class="sub-toggle">
                            <a id="myAnchor" onclick="loadDoc('alumni.html')">
                                <span><i class="fa-solid fa-play"></i></span>
                                    Alumni Association
                            </a>
                        <ul class="nav-child unstyled small list">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_aims.html')">
                                    <span><i class="fa-solid fa-play padding-left"></i></span>
                                        Aims and Objective
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-child unstyled small list">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_regist.html')">
                                    <span><i class="fa-solid fa-play padding-left"></i></span>
                                        Alumni Registration
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-child unstyled small list">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_direct.html')">
                                    <span><i class="fa-solid fa-play padding-left"></i></span>
                                        Alumni Directory
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-child unstyled small list">
                            <li class="item-483 firstItem">
                                <a id="myAnchor" onclick="loadDoc('alumni_activ.html')">
                                    <span><i class="fa-solid fa-play padding-left"></i></span>
                                        Alumni Activities
                                </a>
                            </li>
                        </ul>
                    </ul>
                   
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
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">Co Curricular Activities</h3>
        <div class="newClass">
        <p>
            Organize Lectures By Experts From Industries, R &amp; D Organizations, Defence Services, Government Departments And Other Institutions.
            Coaching Programme For Writing Competitive Examinations And Attending Job Interviews, Training Programmes On Report Writing.
            Cultural Programmes, Counselling Services Lectures On Moral Values And Ethics, Discussions, Brain Storming Sessions, Group Activities,
            Entreprenuership Development Programmes Training On Public Speaking, Training In Becoming A Master Student, Programmes In Leadership
            And Personality Development Visits To Industries, Work Sites Training In Co-Operative Learning, Training On Environmental Awareness,
            Training On Basic Management Skills
        </p>
        </div>
    </div>
</div>
</div>
</div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>

</body>
</html>
 

