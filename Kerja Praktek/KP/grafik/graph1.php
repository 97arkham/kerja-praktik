<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <title></title>
</head>

<body>

  <?php
include('config.php');


  $sql = "SELECT * FROM graph";
  $data = mysqli_query($db, $sql);
  $jumlah = mysqli_query($db, $sql);
   ?>

<div style="height: 85%; width: 85%;">
    <canvas id="myChart" class="chart"></canvas>
</div>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',        //Tipe tampilan grafik, sobat bisa menggunakan tampilan bar, pie, line, radar dan sebagainya
    data: {
        labels: [
          <?php
          while($b = mysqli_fetch_array($data)) {
            echo '"' . $b['data'] . '",';
          }
          ?>
        ], //keterangan nama-nama label
        datasets: [{
            label: 'GRAFIK PEKERJAAN', //Judul Grafik
            data: [
              <?php
              while($a = mysqli_fetch_array($jumlah)) {
                echo $a['jumlah'] . ', ';
              }
              ?>
            ], //Data Grafik
            backgroundColor: [
                'red',  //Warna Background
                'blue', //Warna Background
                'green', //Warna Background
                'silver', //Warna Background
                'black', //Warna Background
                'yellow', //Warna Background
                'purple', //Warna Background
                'brown' //Warna Background
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


</body>
</html>
