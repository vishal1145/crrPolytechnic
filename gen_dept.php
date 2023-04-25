<html lang="en">

<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css">
    <link href=".././css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <style>
        .justify {
            text-align: justify !important;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    include './header.php';
    ?>

    <div class="container height">
        <div class="col-md-3">
            <div class="leftSide">
                <h3 class="module_title">General Department</h3>
                <div class="mod-menu">
                    <ul class="nav">
                        <li>
                            <a href="gen_dept.php">
                                <span><i class="fa-solid fa-play"></i></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a id="myAnchor" onclick="loadDoc('gen_teachingfaculty.php')">
                                <span><i class="fa-solid fa-play"></i></span>
                                Teaching Faculty
                            </a>
                        </li>
                        <li>
                            <a id="myAnchor" onclick="loadDoc('gen_nonTeachingFaculty.php')">
                                <span><i class="fa-solid fa-play"></i></span>
                                Non Teaching Faculty
                            </a>
                        </li>
                        <li>
                            <a id="myAnchor" onclick="loadDoc('gen_lab.html')">
                                <span><i class="fa-solid fa-play"></i></span>
                                Laboratories
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
                            The department of General Science and Humanities has highly qualified, well experienced and
                            dedicated faculties. In engineering domain, the teaching of basic science subjects such as
                            Physics, Chemistry, Mathematics and Professional Communication Skill for all engineering
                            courses plays a vital role to create emerging technocrats. The department gives the exposure of
                            subject knowledge and skills through the regular classes, guest lectures, industrial visits,
                            workshops and seminars. Basically, the department focuses on the student’s involvement in
                            various activities such as engineering’s day, teacher’s day, national science day, poster
                            presentation, technical events, sports, tree plantation, etc under the banner of First Year Students
                            Association (FESA). The department provides platform to students under title of ‘campus for
                            you’ activities (such as Soft Skills training, Group Discussion, Debate, general aptitude,
                            Communication skills etc), interactive methods (such as power point presentation, models, poster
                            presentation, NPTEL videos of certain topics etc), departmental library etc are used to increase
                            interest of students. Parental care and counseling sessions are provided to the students by faculty
                            members to build confidence in them. The department is striving hard to achieve excellence in
                        </p>
                        <h3 class="item_title forcolor">Vision :-</h3>
                        </p>
                        <p>
                            To apply the basic science and professional skills to fulfill the emerging needs of society.
                        </p>
                        <h3 class="item_title forcolor">Mission :-</h3>
                        <ol style="list-style: auto; padding:0px 15px;" type="1">
                            <li>To unlock the beauty of applied sciences through effective teaching learning methods.</li><br>
                            <li>To develop professional skills among the students to succeed in professional career.</li><br>
                            <li>To bring moral and ethical awareness in the students by addressing social and environmental concerns.</li><br>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './footer.php' ?>
    <script src="./script.js"></script>

</body>

</html>