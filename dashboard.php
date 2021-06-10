<?php
    session_start();

    if (isset($_SESSION['authenticated'])) {
        readfile("./index.html");
    } else {
        //echo "Unauthorised";
        readfile("./index.html");
        //header('Location: http://localhost/EspDashboard/dashboard.php/login');
    }

?>