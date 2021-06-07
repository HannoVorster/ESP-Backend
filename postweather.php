<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "esp";

    $data = json_decode(file_get_contents('php://input'), true);
	print_r($data);
	$temp = $data['temp'];
    $humidity = $data['humidity'];
    $user = $data['user'];
    $sensor = $data['sensor'];

    $conn = mysqli_connect($servername, $username, $password, $dbName);

    if (!$conn)
        die ('Connection failed: ' . mysqli_connect_error());

	$sql = "INSERT INTO weatherdata (Temp, Humidity, DateTime, User, Sensor) 
				VALUES (" . $temp . ", " . $humidity . ", NOW(), '" . $user . "', '" . $sensor ."')";

	if (mysqli_query($conn, $sql)) {
		echo "Row Insert successfully\n";
	} else {
		echo "Error inserting row: " . mysqli_error($conn);
	}

    mysqli_close($conn);

?>