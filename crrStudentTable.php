<tr>
    <td colspan="8" style="text-align: center;">
        <strong>
            <em>
                <span>SIR C R REDDY POLYTEHNIC,ELURU</span>
            </em>
        </strong>
    </td>
</tr>
<tr>
    <td colspan="8" style="text-align: center;">
        <strong>
            <em>
                <span><?php echo $headingStudent ?></span>
            </em>
        </strong>
    </td>
</tr>
<tr>
    <th scope="row">S.No</th>
    <th scope="row">Pin No.</th>
    <th scope="row">Unique No</th>
    <th scope="row">Hall Ticket No</th>
    <th scope="row">Rank</th>
    <th scope="row">Name</th>
    <th scope="row">Gender</th>
    <th scope="row">Caste</th>

</tr>

<?php
$index = 1;
while ($row1 = mysqli_fetch_array($tableStudentResult)) :;
?>
    <tr>
        <td><?php echo $index ?></td>
        <td><?php echo $row1['Pin_No'] ?></td>
        <td><?php echo $row1['Unique_No'] ?></td>
        <td><?php echo $row1['Hall_Ticket_No'] ?></td>
        <td><?php echo $row1['rank'] ?></td>
        <td><?php echo $row1['student_name'] ?></td>
        <td><?php echo $row1['gender'] ?></td>
        <td><?php echo $row1['caste'] ?></td>

    </tr>
<?php $index = $index + 1;
endwhile; ?>