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
               <h3 class="module_title">About Us</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            About College
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('V&M.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Vision and mission
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('management.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Management team
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('principle.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Principal and correspondent
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('about_society.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            About Society
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
            <div class="rightside">
                <h3 class="item_title">About College</h3>
                <div class="newClass">
                
				<p>Sir C Ramalinga Reddy Polytechnic is the first Polytechnic College in private sector in Andhra
					Pradesh sanctioned and recognized by All India Council for Technical Education (AICTE). This College
					is permanently affiliated to SBTET Since inception.</p><br>
				<p>Since its inception in 1980, Sir Sir C Ramalinga Reddy Polytechnic has been a premier institute for
					quality Polytechnic education in Andhra Pradesh under the stewardship of its broad minded and
					magnanimous management. The last four decades has seen the Institute fulfilling its motto of
					'QUALITY SERVICE & VALUE BASED EDUCATION' to the student community.</p><br>
				<p>Adhering to its core values, the institute gives top priority to ethical values and high standards
					and a commitment to value based education. We believe in working honestly and sincerely, in building
					trust and in maintaining a long lasting relationship with the Society. Our team comprises of highly
					qualified and motivated faculty. Core competence and a friendly but efficient work culture play an
					important role in our overall achievements.</p><br>
				<p>The College is situated near Vatluru railway gate in Eluru, the Head Quarters of West Godavari
					district. It is surrounded by beautiful paddy fields and is on Chennai-Howrah highway and train
					route. A large number of buses and trains run via this town. It is easily accessible from any part
					of the country by rail as well as road.</p><br>
				<p>The College is located in its own sprawling campus with an area of 11.19 acres. Its magnanimous
					infrastructure and greenery attracts the attention of people who pass by. The vast green campus
					housing several Departments provides a stimulating environment to the high caliber staff and
					students of the institution.
					The Campus at Vatluru is a place where students from all walks of life are under a single umbrella
					pursuing their Diploma course.
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

