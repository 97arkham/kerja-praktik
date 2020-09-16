<?php

include('../config.php');

$sql = "SELECT * FROM testing";
$query = mysqli_query($db, $sql);
while($data = mysqli_fetch_array($query)){
  $a = $data['a'];
  $b = $data['b'];
  $jum = $data['jum'];
}

//$loop_awal=1;// diedit
header("location:http://localhost/KP/Final%20Testing/Final/Version6/uptodate/final00.php?la=$a&ba=$b&cips=mikami&full=$jum");

 ?>
