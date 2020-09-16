




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    

    <title>MONITORING SALES</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../../dist/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-image: url(../../../img/LOGO2.png); background-repeat: no-repeat; background-position: right top ;">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Consumer Bisnis Dashboard</a>
          </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../help/index.php" style="background-color:#2F4F4F" >Help</a></li>
          </ul>
        </div>
      </div>
        </div>
       
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <center><img alt="Telkom Indonesia" src="../../../img/LOGO.png" height="90" width="150"  /></center>
            <br>
            <li><a href="../../../indihomenewtglps/tglps.php" ><center>BACK</center></a></li>
            <br>
            <li ><h5><center>add LIS INDIHOME </center></h5></li>
             
         
        </div>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"> Dashboard</h1>
          <h4>Selamat Datang di Consumer Bisnis Dashboard </h4>

          <br>

          <div class="CONTAINER">
            <div class="col-sm-9">

           
<!--
<a href="../Version2/Data_PI/final1.php">Data PI</a> <br>
<a href="../Version2/Data_PS_Harian/final1.php">Data PS Harian</a><br>

<a href="Data_PS_Bulanan/final1.php">Data PS Bulanan</a> <br>
<a href="Data_PS_Tahunan/final1.php">Data PS Tahunan</a><br>

-->
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

$sql = "SELECT * FROM monitoring";
$query = mysqli_query($db, $sql);
$jumlah=0;
while($data = mysqli_fetch_array($query)){
  $jumlah=$jumlah+1;

}

  echo "Jadi Jumlah PS hari ini = ".$jumlah."<br>";

?>
<a href="show_all.php">Lihat Data</a> <br>


<!---SEMENTARA BUTTON BACK --->



               
            </div>
           </div>  
          
        </div>
      </div>
    </div>
-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../../dist/js/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

