<?php 

require 'connect.php';

$value = $_POST['value'];
$sql = "INSERT INTO `tbl_gas_data` (`data_value`) VALUES ('$value')";
mysqli_query($con, $sql);


?>