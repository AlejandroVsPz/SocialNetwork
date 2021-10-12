<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_network";

$con = mysqli_connect($servername, $username, $password, $dbname);


if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "<script>window.open('main.php','_self')</script>";
    exit;
}
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


?>