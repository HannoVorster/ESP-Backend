<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    define('SERVER_NAME', "localhost");
    define('USER_NAME', "root");
    define('PASSWORD', "Boomsakalaka1");
    define('DB_NAME', "esp_dev");

	function connect() {
        $connect = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

        if (!$connect) 
            die("Failed to connect" . mysqli_connect_error());

        return $connect;
    }

	$conn = connect();
?>