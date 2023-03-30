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
$forEce = "SELECT `sno`, `name of the employee`, `designation`, `qualification`, `phone`, `photos` FROM `facultydetails` WHERE department = 'ece' AND type = 'nontechingfaculty'";
$tableResult = mysqli_query($conn, $forEce);
$heading = "ELECTRONICS&COMMUNICATION ENGINEERING DEPARTMENT NON-TEACHING STAFF LIST";
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">ECE Non Teaching Faculty</h3>
        <div class="newClass">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <?php include "crrfacultyTable.php"; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>