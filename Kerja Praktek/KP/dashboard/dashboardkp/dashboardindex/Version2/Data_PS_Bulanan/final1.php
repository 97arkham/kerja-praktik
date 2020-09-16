<?php


$url="http://localhost/tugas/Version2/Version2/Data_PS_Bulanan/final0.php";
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

header("location:http://localhost/tugas/Version2/Version2/Data_PS_Bulanan/final3.php");

 ?>
