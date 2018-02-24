<?php 

require 'connect.php';
	
getJSONEncode($con);

?>


<?php 

function getJSONEncode($con){



$sql = "SELECT * FROM `tbl_gas_data` ORDER BY gas_id DESC LIMIT 1";

$myArray = array();

$getData = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($getData))
{
	array_push($myArray,array(

		"id" => $row[0],
		"y" => $row[1]

));

}


echo json_encode($myArray, JSON_NUMERIC_CHECK);

}

?>