<?php

$url="http://mydashboard.telkom.co.id/ms2/report_indi_new_tglps_detil.php?p_tipe=PACKAGE&p_startdates=01/06/2018&p_enddates=05/06/2018&p_kawasans=DIVRE_5&p_witels=ALL&p_gtematiks=ALL&p_heads=PSHR&p_coloms=PASURUAN";

//membuat fungsi grabbing dengan curl
function grabCURL($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$grab=curl_exec($ch);
	curl_close($ch);
	return $grab;
}

//membuat fungsi explode dengan multiple delimiter (pembatas)
function explodeX( $delimiters, $string ){
    return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
}

//grab halaman kaskus.co.id;
$hasil =grabCURL($url);

//pecah string hasil grabbing ke array
$pecah = explodeX(array('<a>','</a>'), $hasil); //suskse header

echo $pecah[1];
?>
