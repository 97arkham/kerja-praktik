<?php
function januari($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);

  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/01/2018") {
        $id = 1 ;
      }
    }
  }else {
    $id=0;$bool = true;
    while ($data = mysqli_fetch_array($query)) {
      if ($bool == true) {
        $id= $data['jumlah'] + $id ;
        if ($data['tanggal'] == "31/01/2018") {
          $bool == false;
        }
      }
    }
  }
  return $id;
}

function februari($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/02/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "28/02/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function maret($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/03/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "31/03/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function april($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/04/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "30/04/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function mei($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/05/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "31/05/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function juni($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/06/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "30/06/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function juli($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/07/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "31/07/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function agustus($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/08/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "31/08/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function september($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/09/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "30/09/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function oktober($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/10/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "31/10/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function november($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/11/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "30/11/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function desember($sql,$uji)
{
  include('config.php');
  $query = mysqli_query($db, $sql);
  if ($uji==1) {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "01/12/2018") {
        $id = $data['no'] ;
      }
    }
  }else {
    while ($data = mysqli_fetch_array($query)) {
      if ($data['tanggal'] == "31/12/2018") {
        $id= $data['no'] ;
      }
    }
  }
  return $id;
}

function pindah_data($sql)
{
  include('config.php');

  $query = "DELETE FROM monitoring";
  $hasil = mysqli_query($db,$query);
  $cinta= $_GET['cinta'];

  if ($cinta==1) {
    $id_awal = januari($sql,1);
    $id_akhir = januari($sql,2);
  } elseif ($cinta==2) {
    $id_awal = februari($sql,1);
    $id_akhir = februari($sql,2);
  } elseif ($cinta==3) {
    $id_awal = maret($sql,1);
    $id_akhir = maret($sql,2);
  } elseif ($cinta==4) {
    $id_awal = april($sql,1);
    $id_akhir = april($sql,2);
  } elseif ($cinta==5) {
    $id_awal = mei($sql,1);
    $id_akhir = mei($sql,2);
  } elseif ($cinta==6) {
    $id_awal = juni($sql,1);
    $id_akhir = juni($sql,2);
  } elseif ($cinta==7) {
    $id_awal = juli($sql,1);
    $id_akhir = juli($sql,2);
  } elseif ($cinta==8) {
    $id_awal = agustus($sql,1);
    $id_akhir = agustus($sql,2);
  } elseif ($cinta==9) {
    $id_awal = september($sql,1);
    $id_akhir = september($sql,2);
  } elseif ($cinta==10) {
    $id_awal = oktober($sql,1);
    $id_akhir = oktober($sql,2);
  } elseif ($cinta==11) {
    $id_awal = november($sql,1);
    $id_akhir = november($sql,2);
  } elseif ($cinta==12) {
    $id_awal = desember($sql,1);
    $id_akhir = desember($sql,2);
  }
  echo $id_awal;
  echo "<br>";
  echo $id_akhir;
  die;
  header("location:http://localhost/KP/tabel/show_all.php?sayang=$id_awal&kasih=$id_akhir");

  //$sql1 = "SELECT * FROM full";
  //$query1 = mysqli_query($db, $sql1);

/*
  while ($data = mysqli_fetch_array($query1)) {
    $id =$data['no'];
    if ($id >= $id_awal) {
      if ($id <= $id_akhir) {
        $kawasan      = $data['kawasan'];
        $witel        = $data['witel'];
        $ndem         = $data['ndem'];
        $ncli         = $data['ncli'];
        $ndos         = $data['ndos'];
        $status       = $data['status'];
        $alpro        = $data['alpro'];
        $nd           = $data['nd'];
        $no_internet  = $data['no_internet'];
        $citem        = $data['citem'];
        $kecepatan    = $data['kecepatan'];
        $mdf          = $data['mdf'];
        $deskripsi    = $data['deskripsi'];
        $chanel       = $data['chanel'];
        $status_demand= $data['status_demand'];
        $tgl_reg      = $data['tgl_reg'];
        $tgl_status   = $data['tgl_status'];
        $umur         = $data['umur'];
        $nama         = $data['nama'];
        $kcontact     = $data['kcontact'];

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
          '$id',
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
    }
  }*/
}

function setting()
{
  include('config.php');
  $sql = "SELECT * FROM ps_harian";
  return $sql;
}

$sql = setting();
pindah_data($sql);

?>
