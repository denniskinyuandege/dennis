
<?php
$servername = "localhost";
$username = "root";
$password = "project";

$connect = mysqli_connect($servername, $username, $password, $databasename);
    if(!$connect){
        echo "not connected";
    }
?>