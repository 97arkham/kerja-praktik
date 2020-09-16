<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kp";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Unable to connect Database" . mysqli_connect_error());
}
?>

<?php



  header("location:http://localhost/KP/dashboard/dashboardkp/dashboardindex/version2/Data_PI/final3.php");
 ?>
