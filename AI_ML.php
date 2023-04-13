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
               <h3 class="module_title">AI & ML ENGINEERING</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            AL & ML Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('AL_ML_tachingfaculty.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            AL & ML Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('AL_ML_non_tachingfaculty.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            AL & ML-Non Teaching Faculty
                        </a>
                   </li>
                   <!-- <li>
                        <a id="myAnchor" onclick="loadDoc('cseLibrary.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Department Library
                        </a>
                   </li> -->
                   <li>
                        <a id="myAnchor" onclick="loadDoc('AL_ML_StudentInfo.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Student Info
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('al_ml_gallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Laboratories
                        </a>
                   </li>
                   <!-- <li>
                        <a id="myAnchor" onclick="loadDoc('carrerOppoAL_ML.html')">
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
                <h3 class="item_title">ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING (AIML):</h3>
                <div class="newClass">
                
                    <p>
                        Artificial intelligence and Machine learning engineering are rapidly evolving fields with many fascinating nuances and intricacies. For example, in the early days of AI research, the field experienced an "AI winter" due to the complexity of human intelligence being greater than initially anticipated. Today, machine learning algorithms are prone to making biased decisions, and researchers are working on ways to reduce this bias by using unbiased algorithms and carefully selecting training data. Additionally, missing data is a common problem in machine learning, and researchers often use imputation to estimate missing values. In deep learning, dropout is used to prevent overfitting by randomly dropping out neurons during training. Adversarial examples are a challenge in machine learning, as small changes in input data can significantly affect model performance. Reinforcement learning, which trains agents to take actions in an environment to maximize a reward signal, has applications beyond games like chess and poker, including robotics and autonomous driving. Bayesian optimization is a technique used to optimize model parameters, and it uses a probabilistic model to predict performance. These are just a few examples of the many fascinating and rare aspects of artificial intelligence and machine learning engineering. While machine learning algorithms are great at identifying patterns and making predictions, they can sometimes make biased decisions based on the data they are trained on. This can lead to unfair or discriminatory outcomes. Researchers are working on ways to identify and address these biases, such as by carefully selecting training data and using algorithms that are designed to be fair and unbiased. In deep learning, researchers often use "dropout" as a regularization technique to prevent overfitting. Dropout randomly drops out some neurons during training, forcing the remaining neurons to learn more robust representations.				
                    </p><br> 
                </div>
            </div>
        </div>
       </div>
    </div>
   
    <?php include './footer.php' ?>
    <script src="./script.js"></script>
    
</body>
</html>

