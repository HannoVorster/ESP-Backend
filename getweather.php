<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allor-Headers: *");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "esp";

    $conn = mysqli_connect($servername, $username, $password, $dbName);

    if (!$conn)
        die('Connection failed:' . mysqli_connect_error());

    $query = "SELECT * FROM weatherdata";

    $result = mysqli_query($conn, $query);

    $json = array();
    while ($row = mysqli_fetch_array($result)) 
    {
        $bus = array (
            'id' => $row['Id'],
            'temp' => $row['Temp'],
            'humidity' => $row['Humidity'],
            'datetime' => $row['DateTime'],
            'user' => $row['User'],
            'sensor' => $row['Sensor']
        );
        array_push($json, $bus);
    }
    
    $jsonstring = json_encode($json);

    echo $jsonstring;

    mysqli_close($conn);
?>