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

  //$query = "INSERT INTO cakep(no,kawasan) VALUES ('$no','$kawasan')";





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


header("location:http://localhost/tugas/Version2/Version2/Data_PS_Tahunan/final4.php");
die;
?>
