<?php

$link = file_get_contents('jsonfile.json');

$url=$link;

function grabCURL($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$grab=curl_exec($ch);
	curl_close($ch);
	return $grab;
}
function explodeX( $delimiters, $string ){
    return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
}


$hasil =grabCURL($url);


$pecah = explodeX(array('<a>','</a>'), $hasil); 

echo $pecah[1];


?>
