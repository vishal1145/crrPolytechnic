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
               <h3 class="module_title">CCN</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            CCN Home
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('CCN_tachingfaculty.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            CCN Teaching Faculty
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('CCN_NON_Teachingfaculty.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            CCN-Non Teaching Faculty
                        </a>
                   </li>
                   <!-- <li>
                        <a id="myAnchor" onclick="loadDoc('cseLibrary.html')" >
                            <span><i class="fa-solid fa-play"></i></span>
                            Department Library
                        </a>
                   </li> -->
                   <li>
                        <a id="myAnchor" onclick="loadDoc('CCN_StudentInfo.php')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Student Info
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('cnGallery.html')">
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
                <h3 class="item_title">COMMUNICATION COMPUTER NETWORKS ENGINEERING (CCN):</h3>
                <div class="newClass">
                
                    <p>
                        Communication computer networks engineering is a field of study that focuses on the design, implementation, and maintenance of communication systems that enable the exchange of information between devices and networks. It involves the use of various technologies, protocols, and standards to ensure seamless communication and data transfer between devices, irrespective of their location or type. The field covers a wide range of topics, including network architecture, routing, switching, wireless communication, network security, and network performance optimization. 
                    </p>
                    <p>
                        Communication computer networks engineering plays a critical role in enabling the internet, connecting businesses and individuals, and facilitating the sharing of information and resources. It is a constantly evolving field, with new technologies and trends emerging regularly, and requires continuous learning and upskilling to stay abreast of the latest developments. Communication computer networks engineering also involves the design and optimization of communication protocols that govern the exchange of data between devices. These protocols include standards such as TCP/IP, HTTP, and FTP, which define how data is transmitted, received, and processed by network devices. The field also covers the design and optimization of network topologies, which determine how devices are connected to each other and how data is routed through the network.
                    </p>
                    <p>
                        One of the key challenges in communication computer networks engineering is ensuring the security of data as it is transmitted over the network. This involves the use of various security protocols and encryption techniques to prevent unauthorized access to data and ensure the privacy and integrity of information.
                    </p>
                    <p>
                        Another important aspect of communication computer networks engineering is the optimization of network performance. This involves identifying and mitigating bottlenecks in the network that can cause delays and slow down data transfer. Techniques such as load balancing, traffic shaping, and quality of service (QoS) management are used to optimize network performance and ensure smooth data transfer.                    </p>
                    <p>
                        Overall, communication computer networks engineering is a crucial field that underpins the functioning of modern communication and information systems. It requires a deep understanding of both the technical and practical aspects of network design, implementation, and management, and is a highly rewarding career path for those interested in technology and innovation.                    
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

