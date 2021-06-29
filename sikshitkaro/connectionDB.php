<?php
    $host = "localhost";
    $db_user = "id16916285_root";
    $db_password = "nY~@K7^RQO18IO<f";
    $db = "id16916285_free_education";

    $connection = mysqli_connect($host, $db_user, $db_password, $db);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>