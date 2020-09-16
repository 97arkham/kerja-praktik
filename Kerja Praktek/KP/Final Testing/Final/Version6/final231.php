

<?php

function full_data($jum) {
  include('config.php');

  $txt_file    = file_get_contents('table.txt');
  $x=str_replace("</tr>","|",$txt_file);
  $x=str_replace("</td>","~",$x);
  $x=strip_tags($x);
  $row=explode("|",$x);
  for ($i=1;$i<count($row)-1;$i++){
    $r=explode("~",$row[$i]);

    $no           = $jum;
    $kawasan      = trim($r[1]);
    $witel        = trim($r[2]);
    $ndem         = trim($r[3]);
    $ncli         = trim($r[4]);
    $ndos         = trim($r[5]);
    $status       = trim($r[6]);
    $alpro        = trim($r[7]);
    $nd           = trim($r[8]);
    $no_internet  = trim($r[9]);
    $citem        = trim($r[10]);
    $kecepatan    = trim($r[11]);
    $mdf          = trim($r[12]);
    $deskripsi    = trim($r[13]);
    $chanel       = trim($r[14]);
    $status_demand= trim($r[15]);
    $tgl_reg      = trim($r[16]);
    $tgl_status   = trim($r[17]);
    $umur         = trim($r[18]);
    $nama         = trim($r[19]);
    $kcontact     = trim($r[20]);

    $query = "INSERT into full (
      no,
      kawasan,
      witel,
      ndem,
      ncli,
      ndos,
      status,
      alpro,
      nd,
      no_internet,
      citem,
      kecepatan,
      mdf,
      deskripsi,
      chanel,
      status_demand,
      tgl_reg,
      tgl_status,
      umur,
      nama,
      kcontact
    )values(
      '$no',
      '$kawasan',
      '$witel',
      '$ndem',
      '$ncli',
      '$ndos',
      '$status',
      '$alpro',
      '$nd',
      '$no_internet',
      '$citem',
      '$kecepatan',
      '$mdf',
      '$deskripsi',
      '$chanel',
      '$status_demand',
      '$tgl_reg',
      '$tgl_status',
      '$umur',
      '$nama',
      '$kcontact'
    )";
    $hasil = mysqli_query($db,$query);
    $jum=$jum+1;
  }
  $jumlah=$jum-1;
  $query = "UPDATE testing SET jumlah_db='$jumlah' WHERE no=1";
  $hasil = mysqli_query($db,$query);

  return $jum;
}

if (isset($_GET['caps'])) {
  include('config.php');
  $a= $_GET['la']+1;
  $b= $_GET['ba'];
  $jum=$_GET['full'];
  $jum=full_data($jum);
  header("location:http://localhost/KP/Final%20Testing/Final/Version6/final31.php?la=$a&ba=$b&cips=kutunggu&caps=cintamu&full=$jum");
}else {
  $jum=$_GET['full'];
  header("location:http://localhost/KP/Final%20Testing/Final/Version6/final30.php?la=$a&ba=$b&cips=cinta&caps=cintamu&full=$jum");
}
 ?>
