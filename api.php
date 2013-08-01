<?php
include_once "config/config.php";

$query = "select * from techid_users";

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{
	$data_array["id"] = $row["id"];
	$data_array["username"]=$row["username"];
	$json_array[] = $data_array;
}
	header('Content-type: text/json');
	echo json_encode($json_array);

?>