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
$forAlMl = "SELECT  `id`, `Type`, `sno`, `employee`, `designation`, `qualification`, `phone`, `photos`, `created_at`, `updated_at` FROM `teachers` WHERE department = 'AI&ML' AND Type = 'Non-Teaching'";
$tableResult = mysqli_query($conn, $forAlMl);
$heading = "ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING DEPARTMENT NON-TEACHING STAFF LIST";
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">AL & ML NON-Teaching Faculty</h3>
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