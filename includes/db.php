<?php
    $servername = "localhost";
    $username = "sqluser";
    $password = "sqlpass";
    $dbname = "notes";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection Failed" . mysqli_connect_error());
    }
?>