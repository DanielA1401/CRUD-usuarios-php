<?php

function connection(){
    $host = "lab52db.mysql.database.azure.com";
    $user = "U20051135";
    $pass = "CloudComputing2024!";

    $bd = "users_crud_php";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}

/*function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "users_crud_php";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}*/

?>
