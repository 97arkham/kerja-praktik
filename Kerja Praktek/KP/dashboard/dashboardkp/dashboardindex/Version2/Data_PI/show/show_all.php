<!DOCTYPE html>

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

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="show_all/style.css">
    <link rel="stylesheet" href="show_all/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="show_all/bootstrap/css/dataTables.bootstrap.min.css">

    <title>Data Table</title>
  </head>
  <body>
    <div class="container">

      <div>
            <button onclick="goBack()" style="-moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
  -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
  box-shadow:inset 0px 1px 0px 0px #f29c93;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c41400), color-stop(1, #cf0606) );
  background:-moz-linear-gradient( center top, #c41400 5%, #cf0606 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c41400', endColorstr='#cf0606');
  background-color:#c41400;
  -webkit-border-top-left-radius:20px;
  -moz-border-radius-topleft:20px;
  border-top-left-radius:20px;
  -webkit-border-top-right-radius:20px;
  -moz-border-radius-topright:20px;
  border-top-right-radius:20px;
  -webkit-border-bottom-right-radius:20px;
  -moz-border-radius-bottomright:20px;
  border-bottom-right-radius:20px;
  -webkit-border-bottom-left-radius:20px;
  -moz-border-radius-bottomleft:20px;
  border-bottom-left-radius:20px;
  text-indent:0;
  border:1px solid #d83526;
  display:inline-block;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  font-style:normal;
  height:50px;
  line-height:50px;
  width:100px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #b23e35;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cf0606), color-stop(1, #c41400) );
  background:-moz-linear-gradient( center top, #cf0606 5%, #c41400 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#cf0606', endColorstr='#c41400');
  background-color:#cf0606;
  position:relative;
  top:1px;"><b>Back</b></button>
              <script>
              function goBack() {
               window.history.back();
                }
              </script>
          </div>
          <br>
      <table id="University" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr id="thUniversity">
            <th>No</th>
            <th>Kawasan</th>
            <th>Witel</th>
            <th>Ndem</th>
            <th>Ncli</th>
            <th>Ndos</th>
            <th>Status</th>
            <th>Alpro</th>
            <th>ND</th>
            <th>No Internet</th>
            <th>Citem</th>
            <th>Kecepatan</th>
            <th>MDF</th>
            <th>Deskripsi</th>
            <th>Chanel</th>
            <th>Status Demand</th>
            <th>Tgl Reg</th>
            <th>Tgl Status</th>
            <th>Umur</th>
            <th>Nama</th>
            <th>Kcontact</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Kawasan</th>
            <th>Witel</th>
            <th>Ndem</th>
            <th>Ncli</th>
            <th>Ndos</th>
            <th>Status</th>
            <th>Alpro</th>
            <th>ND</th>
            <th>No Internet</th>
            <th>Citem</th>
            <th>Kecepatan</th>
            <th>MDF</th>
            <th>Deskripsi</th>
            <th>Chanel</th>
            <th>Status Demand</th>
            <th>Tgl Reg</th>
            <th>Tgl Status</th>
            <th>Umur</th>
            <th>Nama</th>
            <th>Kcontact</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $sql = "SELECT * FROM monitoring";
            $query = mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($query)){
              echo "<tr>";
              echo "<td>".$data['no']."</td>";
              echo "<td>".$data['kawasan']."</td>";
              echo "<td>".$data['witel']."</td>";
              echo "<td>".$data['ndem']."</td>";
              echo "<td>".$data['ncli']."</td>";
              echo "<td>".$data['ndos']."</td>";
              echo "<td>".$data['status']."</td>";
              echo "<td>".$data['alpro']."</td>";
              echo "<td>".$data['nd']."</td>";
              echo "<td>".$data['no_internet']."</td>";
              echo "<td>".$data['citem']."</td>";
              echo "<td>".$data['kecepatan']."</td>";
              echo "<td>".$data['mdf']."</td>";
              echo "<td>".$data['deskripsi']."</td>";
              echo "<td>".$data['chanel']."</td>";
              echo "<td>".$data['status_demand']."</td>";
              echo "<td>".$data['tgl_reg']."</td>";
              echo "<td>".$data['tgl_status']."</td>";
              echo "<td>".$data['umur']."</td>";
              echo "<td>".$data['nama']."</td>";
              echo "<td>".$data['kcontact']."</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>

    <script type="text/javascript" src="show_all/bootstrap/JQuery/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="show_all/bootstrap/JQuery/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="show_all/bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#University').DataTable();
      } );
    </script>


<!---SEMENTARA BUTTON BACK --->

    
    <button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
  </body>
</html>
