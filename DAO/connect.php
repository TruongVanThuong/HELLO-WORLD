<?php

// ket noi
    $host = "localhost";
    $username = "root";
    $password = "";
    $dtbname = "xshop";

    // connect database
    $mysqli = new mysqli($host, $username, $password, $dtbname);

    // check connect
    if ($mysqli->connect_error) {
        die("connect error : " . $mysqli->connect_error);
    }

?>