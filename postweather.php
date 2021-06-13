<?php
    require 'connect.php';

    // JSON data...
    $data = json_decode(file_get_contents('php://input'), true);
	print_r($data);
	$temp = $data['temp'];
    $humidity = $data['humidity'];
    $user = $data['user'];
    $sensor = $data['sensor'];

	$sql = "INSERT INTO weatherdata (Temp, Humidity, DateTime, User, Sensor) 
				VALUES (" . $temp . ", " . $humidity . ", NOW(), '" . $user . "', '" . $sensor ."')";

	if (mysqli_query($conn, $sql)) {
        http_response_code(200);
	} else {
        http_response_code(404);
	}
?>