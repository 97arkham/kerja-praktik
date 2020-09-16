<?php
$conn = mysqli_connect("localhost","root","","kp");
$data_ps= mysqli_query($conn,"SELECT tanggal, SUM(jumlah) AS jumlah FROM ps_harian GROUP BY no");


$tanggal = array();
$jumlah = array();
while($data =mysqli_fetch_array($data_ps)){
  $tanggal[]=($data['tanggal']);
  $jumlah[]= intval($data['jumlah']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    .container {
      width: 100%;
      margin: 15px 10px;
    }
    .chart {
      width: 1000px;
      float: left;
      text-align: center;
    }
  </style>
  <script type="text/javascript" src="Chart.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>MONITORING SALES</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dist/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

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
           <center><img alt="Telkom Indonesia" src="../img/LOGO.png" height="90" width="150"  /></center>
            <br>
            <li><a href="../PS/PS.PHP" ><center>BACK</center></a></li>
            <br>
            <li ><h5><center>add LIS INDIHOME </center></h5></li>


        </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><center>Line Chart</center></h1>

          <div class="CONTAINER">
            <div class="col-sm-9">
    <div class="chart">

      <canvas id="line-chart"></canvas>
    </div>
  </div>
  <script>

    var linechart = document.getElementById('line-chart');
    var chart = new Chart(linechart, {
      type: 'line',
      data: {
        labels: <?php echo json_encode($tanggal) ?>, // Merubah data tanggal menjadi format JSON
        datasets: [{
          label: 'Data ps_harian',
          data: <?php echo json_encode($jumlah) ?>,
          borderColor: 'rgba(255,99,132,1)',
          backgroundColor: 'transparent',
          borderWidth: 2
        }]
      }
    });
  </script>

<!--
<a href="../Version2/Data_PI/final1.php">Data PI</a> <br>
<a href="../Version2/Data_PS_Harian/final1.php">Data PS Harian</a><br>

<a href="Data_PS_Bulanan/final1.php">Data PS Bulanan</a> <br>
<a href="Data_PS_Tahunan/final1.php">Data PS Tahunan</a><br>

-->




            </div>
           </div>

        </div>
      </div>
    </div>
-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../dist/js/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
