<?php

$url= "http://localhost/KP/dashboard/dashboardkp/dashboardindex/version2/Data_PS_Harian/final0.php";

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

header("location:http://localhost/KP/dashboard/dashboardkp/dashboardindex/version2/Data_PS_Harian/final3.php");

 ?>
