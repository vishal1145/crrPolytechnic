
<?php
include "connection.php";
?>

<style>
    .photos {
        height: 100px;
        width: 100%;
        object-fit: cover;
    }

    .photos_obj {
        height: 350px;
        width: 100%;
        object-fit: cover;
    }
</style>

<?php

$forEee = "SELECT `sno`, `name of the employee`, `designation`, `qualification`, `phone`, `photos` FROM `facultydetails` WHERE department = 'eee' AND type = 'techingfaculty'";

$tableResult = mysqli_query($conn, $forEee);
$heading = "ELECTRICAL&ELECTRONICS ENGINEERING DEPARTMENT TEACHING STAFF LIST";


?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">EEE Teaching Faculty</h3>
        <div class="newClass">
            <div>
                <img src="./images/eeeGrpFaculty.jpg" alt="" class="photos_obj">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered margin">
                    <tbody>
                    <?php include 'crrfacultyTable.php' ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>