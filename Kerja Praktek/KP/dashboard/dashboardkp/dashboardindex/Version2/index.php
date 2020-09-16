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
$query = "DELETE FROM monitoring";
$hasil = mysqli_query($db,$query);
?>

<a href="Data_PI/final1.php">Data PI</a> <br>
<a href="Data_PS_Harian/final1.php">Data PS Harian</a><br>
<a href="Data_PS_Bulanan/final1.php">Data PS Bulanan</a> <br>
<a href="Data_PS_Tahunan/final1.php">Data PS Tahunan</a><br>
<a href="#">..</a> <br>
<a href="#">..</a><br>
<a href="#">..</a> <br>
<a href="#">..</a><br>
