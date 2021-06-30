<?php

    $_SERVER = "sql202.epizy.com";
    $username = "epiz_28998765";
    $pasword = "DxqfiMPNUc4YiR";
    $dbname = "epiz_28998765_companytest12";

    $conn = mysqli_connect($server, $username, $pasword, $dbname);

    if(!$conn){
        die("connection Failed:".mysqli_connect_error());

    }
?>