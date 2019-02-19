<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "config.php";
$sql = "SELECT temp,hum FROM weather where log=(select max(log) from weather)";
$result = mysqli_query($link,$sql);
$response = array();

if (mysqli_num_rows($result) > 0) {
    
    $response["weather"] = array();

    while ($row = mysqli_fetch_array($result)) {
        $weather = array();
        $weather["temp"] = $row["temp"];
        $weather["hum"] = $row["hum"];       
		

        array_push($response["weather"], $weather);
    }
    $response["success"] = 1;

    echo json_encode($response);
}	
else 
{
	$response["success"] = 0;
    $response["message"] = "No data on weather found";
    echo json_encode($response);
}
mysqli_close($link);
?>