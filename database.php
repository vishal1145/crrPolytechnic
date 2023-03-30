<?php
$conn = mysqli_connect("localhost", "root", "", "crrpolytechnic") or die ("connection failed");

$sql1 =" SELECT `id`, `image-url`, `title`, `subtitle`, `type`, `time` FROM `crrimages` WHERE type = 'scroll'";
$result1 = $conn->query($sql1);
$rows=$result1->fetch_assoc();

?>


<img src="<?php echo $rows['image-url']?>" alt="">