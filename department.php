<html lang="en">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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
               <h3 class="module_title">Departments</h3>
               <div class="mod-menu">
                <ul class="nav">
                   <li>
                        <a href="">
                            <span><i class="fa-solid fa-play"></i></span>
                            about department
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('civilGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Civil Engineeing
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('computerEngGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Computer Engineeing
                        </a>
                   </li>
                   <li>
                        <a id="myAnchor" onclick="loadDoc('eceGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            ECE
                        </a>
                   </li>
                   <li>
                        <a  id="myAnchor" onclick="loadDoc('eeeGallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            EEE
                        </a>
                   </li>
                   <!-- <li>
                        <a id="myAnchor" onclick="loadDoc('gallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            gallery
                        </a>
                   </li> -->
                   <li>
                        <a id="myAnchor" onclick="loadDoc('megallery.html')">
                            <span><i class="fa-solid fa-play"></i></span>
                            Mechanical Engineeing
                        </a>
                   </li>
                </ul>
               </div>
            </div>
          
        </div>
       <div id="demo">
       <div class="col-md-9">
        <div class="rightside">
            <h3 class="item_title">Department wise Lab / Major Equipments</h3>
            <div class="newClass">
            <h3 class="item_title forcolor">Major Laboratories</h3>
           <div class="table-responsive">
           <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">COURSE</th>
                        <th scope="col">LEVEL</th>
                        <th scope="col" >NAME OF THE LABORATRY</th>
                        <th scope="col">LAB / MAJOR EQUIPMENTS</th>
                        <th scope="col">BUILDING NAME</th>
     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">CIVIL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>HYDRAULICS LAB</td>
                        <td>PIPE FRICTION APPARATUS -1NO V-NOTCH-1NO ORIFICE-1NO MOUTH PIECE-1NO VENTURIMETER-1NO P.W.TURB</td>
                        <td>Civil/Elect Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">CIVIL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>SOIL MECHANICS</td>
                        <td>LIQUID LIMIT FIELD DENSITY APPARATAUS-1NO HOT AIROVEN-1NO</td>
                        <td>Civil/Elect Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">CIVIL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>STRENGTH OF MATERIALS LAB</td>
                        <td>UNIVERSAL TESTING MACHINE-1 COMPREESTION TESTING MACHINE TORSION TESTING MACHINE IMPACT TESTING M</td>
                        <td>Civil/Elect Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">CIVIL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>SURVEYING LAB</td>
                        <td>DUMPY LELVELS-22 NOS THEODOLITES-11 NOS Y-LEVEL-1NO TILTING LEVEL-1 NO QUCK SET LEVEL-1 NO</td>
                        <td>Civil/Elect Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">COMPUTER SCEINCE & ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>HARDWARE & MAITAINENCE LAB </td>
                        <td>COMPUTERS L&T 240CPS DMP PRINTER, DIGITAL LIGIC ANALYZER LOGIC PULSER-LPR007, DIGITAL IC TESTER.</td>
                        <td>DR 1 / Hardware Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">COMPUTER SCEINCE & ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>COMPUTER LAB-1</td>
                        <td>HP COMPAQ DX7200/CONFIG NETWORKING,6 KVUPS & A.C</td>
                        <td>South-west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">COMPUTER SCEINCE & ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>COMPUTER LAB-2</td>
                        <td>HP COMPAQ DX7200 CONFIG NETWORKING,6 KV UPS & A/C</td>
                        <td>South-west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">ELECTRICAL AND ELECTRONICS ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>DC&AC MACHINES,MEASUREMENTS LAB</td>
                        <td>1 KVA&2 KVATRANSFORMERS 3 PHASE INDUCTION MOTORS DC SERIES MOTORS DC SERIES GENERATOR</td>
                        <td>Elect/Civil Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">ELECTRICAL AND ELECTRONICS ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>INDUSTRIAL AUTO MATION LAB</td>
                        <td>PLC TRAINER KIT LIFT WORKING MODEL TRAFFIC LIGHTING WORKING MODEL SEQUENTIAL CONTROL OF MOTORS</td>
                        <td>Civil/Elect Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">COMPUTER SCEINCE & ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>WIRING LAB</td>
                        <td>EARTH RESISTANCE TESTER TONG TESTER INSULLATION TESTER MERCURY VAPOUR LAMP SET</td>
                        <td>DR 1 & Hardware Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">COMPUTER SCEINCE & ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>DIGITAL ELECTRONICS,MICROCONTROLLERS LAB</td>
                        <td>8051 MICROCONTROLLER KITS WITH POWER SUPPLIES MODEL,8085 & 8086 MICROPROCESSOR TRAINING KITS.</td>
                        <td>South-west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">COMPUTER SCEINCE & ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>ELECTRONIC CIRCUITS,POWER ELECTRONICS LAB</td>
                        <td>CRO'S& FUNCTIONGENERATORS,AMPLIFIERS,OSCILLATORS,SCR,DIAC,TRIAC KITS,VOLTMETERS,AMMETERS</td>
                        <td>South-west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">FIRST YEAR/OTHER</th>
                        <td>DIPLOMA</td>
                        <td>CHEMISTRY</td>
                        <td>PH METER TURBIDITY METER CONDUCTIVITY METER SINGLE PAN BALANCE BURETTES,PIPETTS CONICAL FLASKS</td>
                        <td>Mech/AS Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">FIRST YEAR/OTHER</th>
                        <td>DIPLOMA</td>
                        <td>LANGUAGE LAB</td>
                        <td>DVD PLAYER AMPLIFIERS CORDLESS MICROPHONES SPEAKERS CDS & DVDS</td>
                        <td>South west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">FIRST YEAR/OTHER</th>
                        <td>DIPLOMA</td>
                        <td>PHYSICS</td>
                        <td>VERNIER CALIPERS SCREW GUAGE TRAVELLING MICROSCOPE RESONANCE APPARATUS METER BRIDGE STOP WATCH</td>
                        <td>South west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">MECHANICAL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>CAD/CAM AND IT LAB</td>
                        <td>COMPUTERS AND ITS ACCESSORIES/STABILIZERS/AC MACHINES</td>
                        <td>west Block</td>
                    </tr>
                    <tr>
                        <th scope="row">MECHANICAL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>FUELS LAB</td>
                        <td>FLASH AND FIRE POINT EQUIPMENTS/JUNCKERS GAS CALORY METERS/BOMB CALORY METERS/ORSAT GAS APPARATUS</td>
                        <td>DR 1/Hardware Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">MECHANICAL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>HEAT ENGINES/ R AND AC</td>
                        <td>DIESEL ENGINES WITH ACCESSORIES/PETROL ENGINE S WITH ACCESSORIES/ R AND A C EQUIPMENTS AND TOOLS</td>
                        <td>Mech/AS Lab</td>
                    </tr>
                    <tr>
                        <th scope="row">MECHANICAL ENGINEERING</th>
                        <td>DIPLOMA</td>
                        <td>WORK SHOP</td>
                        <td>LATHE/POWER HACKSAW/DRILLING/SHAPING/MILLING MACHINES, FORGING SHOP</td>
                        <td>Work Shop</td>
                    </tr>
                </tbody>
            </table>
           </div>
            </div>
        </div>
        </div>
       </div>
    </div>
</div>
    <?php include 'footer.php' ?>
    <script src="./script.js"></script>
    <style>
        td{
            font-size:12px;
        }
        th{
            font-size:12px;
        }
    </style>

</body>
</html>