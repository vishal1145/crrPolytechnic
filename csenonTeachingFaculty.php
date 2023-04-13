<?php
include "connection.php";
?>
<style>
    .photos {
        height: 100px;
        width: 100%;
        object-fit: cover;
    }
</style>
<?php
$forCse = "SELECT `id`, `Type`, `sno`, `employee`, `designation`, `qualification`, `phone`, `photos`, `created_at`, `updated_at` FROM `teachers` WHERE department = 'CSE' AND Type = 'Non-Teaching'";
$tableResult = mysqli_query($conn, $forCse);
$heading = 'COMPUTER ENGINEERING DEPARTMENT NON-TEACHING STAFF LIST';
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">CSE Non Teaching Faculty</h3>
        <div class="newClass">
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