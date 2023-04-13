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
$forCcn = "SELECT  `id`, `Type`, `sno`, `employee`, `designation`, `qualification`, `phone`, `photos`, `created_at`, `updated_at` FROM `teachers` WHERE department = 'CCN' AND Type = 'Teaching'";
$tableResult = mysqli_query($conn, $forCcn);
$heading = "COMPUTER COMMUNICATION NETWORK DEPARTMENT TEACHING STAFF LIST";

?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">COMPUTER COMMUNICATION NETWORK DEPARTMENT TEACHING STAFF LIST</h3>
        <div class="newClass">
            <div>
                <img src="./images/CCN grp pic.jpg" alt="" class="photos_obj">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered margin">
                    <?php include "crrfacultyTable.php"; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>