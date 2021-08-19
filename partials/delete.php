<?php

require 'dbconnect.php';

$sno = $_GET['sno'];
echo $sno;
$sql = "DELETE FROM `notestable` WHERE `notestable`.`sno`='$sno'";
mysqli_query($conn, $sql);
header('location: /crud-project/index.php');
?>