<?php
    define('SERVER_NAME', "localhost");
    define('USER_NAME', "root");
    define('PASSWORD', "");
    define('DB_NAME', "esp");

	function connect() {
        $connect = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

        if (!$connect) 
            die("Failed to connect" . mysqli_connect_error());

        return $connect;
    }

	$conn = connect();
?>