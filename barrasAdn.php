<?php
include 'image.php';
if(isset($_GET['seq']) && $_GET['seq']!=""){
	
	$alto = 80;
	$ancho =  strlen($_GET['seq'])*1.5+20;
	$image = imagecreate($ancho, $alto);	
	//Declarar los colres;
	$black = imagecolorallocate($image, 245, 245, 245);	
	$xInicial = 10; //10px de margen.
	$ytop = 10;
	$yabajo = $alto- 10;
	generarBarcode($image, $xInicial, $ytop,  $_GET['seq']);
	header('content-type: image/png');
	imagepng($image); //save the image as a png and output
	imagedestroy($image);
}