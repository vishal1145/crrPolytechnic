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
$forCe = "SELECT `sno`, `name of the employee`, `designation`, `qualification`, `phone`, `photos` FROM `facultydetails` WHERE department = 'ce' AND type = 'teachingfaculty'";
$tableResult = mysqli_query($conn, $forCe);
$heading = "CIVIL ENGINEERING DEPARTMENT TEACHING STAFF LIST";
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">CIVIL ENGINEERING DEPARTMENT TEACHING STAFF LIST :-</h3>
        <div class="newClass">
            <div>
                <img src="./images/ceGrpFaculty.jpg" alt="" class="photos_obj">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <?php include 'crrfacultyTable.php' ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>