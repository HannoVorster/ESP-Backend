<?php
    require './connect.php';

    $query = "SELECT * FROM weatherdata ORDER BY Id ASC";

    if ($result = mysqli_query($conn, $query)) {
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
    }
    else {
        http_response_code(404);
    }
?>