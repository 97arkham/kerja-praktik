<?php

function simpan_jumlah($jumlah)
{
  $no= $_GET['la'];
  include('config.php');
  $query = "UPDATE ps_harian SET jumlah='$jumlah' WHERE no=$no";
  $hasil = mysqli_query($db,$query);
}

function kirim_url() {
  $a= $_GET['la'];
  $b= $_GET['ba'];
  $tunjuk= $_GET['caps'];

  if ($a!=$b) {
      $jum = $_GET['full'];
      header("location:http://localhost/KP/Final%20Testing/Final/Version6/final231.php?la=$a&ba=$b&cips=cinta&caps=ituindah&full=$jum");
    //  header("location:http://localhost/KP/Final%20Testing/Final/Version6/final00.php?la=$loop_awal&ba=$batas_awal&cips=mikami&lanjut=1&batas=$batas");
  }
  else {
    header("location:http://localhost/KP/Final%20Testing/Final/Version6/final231.php?la=$a&ba=$b&cips=cinta");
  }

}

function ambil_data() {
  $url="http://localhost/KP/Final%20Testing/Final/Version6/final01.php";
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );

  //should save html in $html
  $html = curl_exec($ch);

  //save html on txt
  $fh = fopen('table.txt', 'w') or die("can't open file");
          fwrite($fh, $html);
          fclose($fh);

  curl_close($ch);
  //echo "sukses";
}

function isi_data() {
  include('config.php');
  $query = "DELETE FROM monitoring";
  $hasil = mysqli_query($db,$query);

  $txt_file    = file_get_contents('table.txt');
  $x=str_replace("</tr>","|",$txt_file);
  $x=str_replace("</td>","~",$x);
  $x=strip_tags($x);
  $row=explode("|",$x);
  for ($i=1;$i<count($row)-1;$i++){
    $r=explode("~",$row[$i]);

    $no           = trim($r[0]);
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

    $query = "INSERT into monitoring (
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
  }
  $jumlah=$no;
/*
  $sql = "SELECT * FROM testing";
  $query = mysqli_query($db, $sql);
  $batas_awal=0;


  $jumlah1=$jumlah
  $query = "UPDATE testing SET jumlah_asli='$jumlah' WHERE no=1";
  $hasil = mysqli_query($db,$query);
*/
  return $jumlah;
}

  ambil_data();
  $jumlah=isi_data();
  simpan_jumlah($jumlah);
  kirim_url();
 ?>
