<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem15";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>