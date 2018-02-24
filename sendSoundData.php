<?php 

require 'connect.php';

$value = $_POST['value'];
$sql = "INSERT INTO `tbl_sound_data` (`value`) VALUES ('$value')";
mysqli_query($con, $sql);


?>