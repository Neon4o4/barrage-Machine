<?php

$server_name = "localhost";
$sql_user = "Barrage_server";
$sql_passwd = "123123";
$database = "Barrage_list";

$sql_conn = mysql_connect($server_name, $sql_user, $sql_passwd);
mysql_select_db($database);
mysql_query("set names 'utf8'");
$sql_cmd = "select * from Barrage_list";
$result = mysql_query($sql_cmd, $sql_conn);

$json_arr = array();

while( $row = mysql_fetch_array($result,MYSQL_ASSOC) ) {
	//$row["color"] = dechex($row["color"]);
	array_push($json_arr, $row);
	//print_r($row);
}
//print_r($json_arr);

echo json_encode((object)$json_arr);

?>