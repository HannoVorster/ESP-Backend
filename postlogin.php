<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allor-Headers: *");

    $data = json_decode(file_get_contents('php://input'), true);
    //print_r($data);

    echo 'OK';
?>