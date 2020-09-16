
<?php
include('config.php');

$query = "DELETE FROM ps_harian";
$hasil = mysqli_query($db,$query);

  function cekKabisat($nilai) {
    if($nilai % 400 == 0){
      return 29;
    }else if(($nilai % 4 == 0) && ($nilai % 100 != 0) && ($nilai % 400 != 0)) {
      return 29;
    } else {
      return 28;
    }
  }
  $no=0;
  $hari=0;
  $bulan=1;
  $tahun=2018;
  $kabisat=2018;
  $finish=false;
  do {
    if ($bulan==1 || $bulan==3 || $bulan==5 || $bulan==7 || $bulan==8 || $bulan==10 || $bulan==12) {
      if ($hari>=31) {
        $bulan=$bulan+1;
        $hari=0;
      }
    } elseif ($bulan==4 || $bulan==6 || $bulan==9 || $bulan==11) {
      if ($hari>=30) {
        $bulan=$bulan+1;
        $hari=0;
      }
    }else {
      $kabisat=cekKabisat($kabisat);
      if ($hari>=$kabisat) {
        $bulan=$bulan+1;
        $hari=0;
      }
    }

    $hari=$hari+1;
    $finish_hari=$hari;
    $finish_bulan=$bulan;
    if ($hari<=9) {
      $hari="0".$hari;
    }
    if ($bulan<=9) {
      $bulan="0".$bulan;
    }

    $tanggal=$hari."/".$bulan."/".$tahun;

    if ($finish_bulan==12 && $finish_hari==31) {
      $finish=true;
    } else {
      $bulan=$finish_bulan;
      $finish=false;
    }

    $no=$no+1;
    $jumlah=0;
    $query = "INSERT into ps_harian (
      no,
      tanggal,
      jumlah
    )values(
      '$no',
      '$tanggal',
      '$jumlah'
    )";
    $hasil = mysqli_query($db,$query);

  } while ($finish == false);

?>
