<?php
$a= $_GET['la'];
$b= $_GET['ba'];
$jum=$_GET['full'];
//$cinta='sayangkamu';
  include('config.php');
  $query = "UPDATE testing SET a='$a' WHERE no=1";
  $hasil = mysqli_query($db,$query);

  $query = "UPDATE testing SET b='$b' WHERE no=1";
  $hasil = mysqli_query($db,$query);

  $query = "UPDATE testing SET jum='$jum' WHERE no=1";
  $hasil = mysqli_query($db,$query);

 ?>
<a href="final232.php">next</a> <br>
<a href="indexnya.php">home</a> <br>
