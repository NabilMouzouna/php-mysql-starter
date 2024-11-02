<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "YOUR_DATABASE_NAME";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    echo "Unable to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "Successful connection<br>";
?>