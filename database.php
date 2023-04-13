<?php
$conn = mysqli_connect("mysql-121079-0.cloudclusters.net", "admin", "eO0P7rYz", "crrPolytechnic", "19848") or die("connection failed");

$sql1 = " SELECT `id`, `image-url`, `title`, `subtitle`, `type`, `time` FROM `crrimages` WHERE type = 'scroll'";
$result1 = $conn->query($sql1);
$rows = $result1->fetch_assoc();

?>


<img src="<?php echo $rows['image-url'] ?>" alt="">