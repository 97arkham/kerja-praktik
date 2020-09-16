<?php


include('config.php');
include('set_tanggal.php');

$sql = "SELECT * FROM ps_harian";
$query = mysqli_query($db, $sql);
$batas_awal=0;

while($data = mysqli_fetch_array($query)){
  $batas_awal=$batas_awal+1;
}
$loop_awal=1;
$batas=5;
header("location:http://localhost/KP/Final%20Testing/Final/Version6/final00.php?la=$loop_awal&ba=$batas_awal&cips=mikami&lanjut=1&batas=$batas");

 ?>
