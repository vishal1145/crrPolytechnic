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
$forAlMl = "SELECT `sno`, `name of the employee`, `designation`, `qualification`, `phone`, `photos` FROM `facultydetails` WHERE department = 'alml' AND type = 'teachingfaculty'";
$tableResult = mysqli_query($conn, $forAlMl);
$heading = "ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING DEPARTMENT TEACHING STAFF LIST";
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">AL & ML Teaching Faculty</h3>
        <div class="newClass">
            <div>
                <img src="./images/AI grp pic.jpg" alt="" class="photos_obj">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered margin">
                    <tbody>
                        <?php include "crrfacultyTable.php"; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>