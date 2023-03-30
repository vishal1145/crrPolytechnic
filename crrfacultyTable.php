<tr>
    <td colspan="8" style="text-align: center;">
        <strong>
            <em>
                <span>SIR C R REDDY POLYTECHNIC, ELURU</span>
            </em>
        </strong>
    </td>
</tr>

<tr>
    <td colspan="8" style="text-align: center;">
        <strong>
            <em>
                <span><?php echo $heading ?></span>
            </em>
        </strong>
    </td>
</tr>
<tr>

<tr>
    <th scope="row">SL.No</th>
    <th scope="row">NAME OF THE EMPOLYEE</th>
    <th scope="row">DESIGNATION</th>
    <th scope="row">QUALIFICATION</th>
    <th scope="row">PHONE</th>
    <th scope="row">PHOTOS</th>

</tr>




<?php
$index = 1;
while ($row1 = mysqli_fetch_array($tableResult)) :;
?>
    <tr>
        <td><?php echo $index ?></td>
        <td><?php echo $row1['name of the employee'] ?></td>
        <td><?php echo $row1['designation'] ?></td>
        <td><?php echo $row1['qualification'] ?></td>
        <td><?php echo $row1['phone'] ?></td>
        <td><img src="<?php echo $row1['photos'] ?>" alt="" class="photos"></td>

    </tr>
<?php $index = $index + 1;
endwhile; ?>