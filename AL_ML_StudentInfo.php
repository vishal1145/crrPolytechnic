<?php
include "connection.php";


$forCse = "SELECT `id`, `Department`, `Pin_No`, `Unique_No`, `Hall_Ticket_No`, `rank`, `student_name`, `gender`, `caste`, `created_at`, `updated_at` FROM `students` WHERE Department='ALML'";
$tableStudentResult = mysqli_query($conn, $forCse);
$headingStudent = 'AIML Ist Year ';
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">Student Information</h3>
        <div class="newClass">
       
       
     <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <?php include "crrStudentTable.php"; ?>
            </tbody>
            </table>
    
     </div>
        </div>
    </div>
</div>
</div>