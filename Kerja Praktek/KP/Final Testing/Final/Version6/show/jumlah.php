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

$sql = "SELECT * FROM monitoring";
$query = mysqli_query($db, $sql);
$jumlah=0;
while($data = mysqli_fetch_array($query)){
  $jumlah=$jumlah+1;

}

  echo "Jadi Jumlah PI hari ini = ".$jumlah."<br>";

?>
<a href="show_all.php">Lihat Data</a> <br>
