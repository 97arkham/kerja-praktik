<?php


if (isset($_GET['cips']) ) {
  //header("location:http://localhost/KP/Final%20Testing/Final/Version5/final01.php?DumSErr=$address");
  $no=$_GET['la'];

  include('../config.php');
  $sql = "SELECT * FROM ps_harian WHERE no='$no'";
  $query = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($query);
  $tanggal = $data['tanggal'];

  $awal=$tanggal;
  $akhir=$tanggal;
  $address="http://mydashboard.telkom.co.id/ms2/report_indi_new_tglps_detil.php?p_tipe=PACKAGE&p_startdates=".$awal."&p_enddates=".$akhir."&p_kawasans=DIVRE_5&p_witels=ALL&p_gtematiks=ALL&p_heads=PSBLN&p_coloms=PASURUAN";
  $no1=$_GET['ba'];
  //echo $address;
  file_put_contents('jsonfile.json',$address);

  $jum=$_GET['full'];
  header("location:http://localhost/KP/Final%20Testing/Final/Version6/uptodate/final10.php?la=$no&ba=$no1&cips=bramaganteng&caps=bramahkuh&&full=$jum");


}



 ?>
