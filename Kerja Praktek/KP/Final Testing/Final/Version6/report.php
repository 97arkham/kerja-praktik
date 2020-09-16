<?php

function jumlah_asli() {
  include('config.php');

  $sql = "SELECT * FROM ps_harian";
  $query = mysqli_query($db, $sql);

  $jumlah = 0;
  while($data = mysqli_fetch_array($query)){
    $jumlah = $jumlah + $data['jumlah'];
  }

  $query = "UPDATE testing SET jumlah_asli='$jumlah' WHERE no=1";
  $hasil = mysqli_query($db,$query);

}

function jumlah_db() {
  include('config.php');

  $sql = "SELECT * FROM full ORDER BY no DESC";
  $query = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($query);
  $jumlah = $data['no'];

  $query = "UPDATE testing SET jumlah_db='$jumlah' WHERE no=1";
  $hasil = mysqli_query($db,$query);
}

function jumlah_sebelumnya() {
  include('config.php');

  $sql = "SELECT * FROM testing";
  $query = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($query);

  $jumlah = $data['jumlah_asli']-$data['jumlah_hariini'];

  $query = "UPDATE testing SET jumlah_sebelumnya='$jumlah' WHERE no=1";
  $hasil = mysqli_query($db,$query);
}

function jumlah_hariini() {
  include('config.php');

  $sql = "SELECT * FROM monitoring ORDER BY no DESC";
  $query = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($query);

  $jumlah = $data['no'];

  $query = "UPDATE testing SET jumlah_hariini='$jumlah' WHERE no=1";
  $hasil = mysqli_query($db,$query);
}

function print_data() {
  include('config.php');

  $sql = "SELECT * FROM testing";
  $query = mysqli_query($db, $sql);

  while($data = mysqli_fetch_array($query)){
    echo "jumlah_asli = ".$data['jumlah_asli']."<br>";
    echo "jumlah_db = ".$data['jumlah_db']."<br>";
    echo "jumlah_sebelumnya = ".$data['jumlah_sebelumnya']."<br>";
    echo "jumlah_hariini = ".$data['jumlah_hariini']."<br>";
  }
}
jumlah_sebelumnya();

jumlah_hariini();
jumlah_asli();
jumlah_db();
print_data();

 ?>
