<?php
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 18/03/2018
 * Time: 13:59
 */
function MY_Help_helper(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
// Create connection
    $conn = mysqli_connect($servername, $username, $password);
// Check connection
    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}