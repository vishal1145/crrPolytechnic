<?php include "connection.php"; ?>
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
$forCe = "SELECT `sno`, `employee`, `designation`, `qualification`, `phone`, `photos` FROM `teachers` WHERE department = 'CE' AND type = 'Non-Teaching'";
$tableResult = mysqli_query($conn, $forCe);
$heading = "CIVIL ENGINEERING DEPARTMENT NON-TEACHING STAFF LIST";
?>
<div class="col-md-9">
    <div class="rightside">
        <h3 class="item_title">CIVIL ENGINEERING DEPARTMENT NON-TEACHING STAFF LIST :-</h3>
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