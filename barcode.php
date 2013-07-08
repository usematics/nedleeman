<?php
include 'image.php';
include 'needleman.php';

//Report any errors
//ini_set ("display_errors", "1");
//error_reporting(E_ALL);

//Inicializacion de variables
$opciones=null;
$alinear = false;
$consenso = false;
$alto = 100;
$altoLinea = 60;

/*$seq1 =
"TTACTAATTTACTGTCAACAATTCCATATCTAGGTAATGATATTGTAATATGAGTATGAGGGGGATTTTCAATTA
ATAACTCTACCCTTAATCGATTTTACTCTATCCATTTTATCCTACCGTTCCTGATCTTAATATTAATAATTACAC
ACTTAATATTTCTCCATGAATCAGGGTCTTCAAATCCACTTGGGGTTAAAAGAGACCTAAATAAAATCCCTTTCC
ACATCTACTTTACTATTAAAGATTTATACATATTTATATTAATTATTTTAATATTCTCAACCGTTATCCTCCAGT
ATCCATATATATTTAGAGATCCAGACAACTTTACCTCAGCAAATCCTATGGTCACACCAGTCCACATCCAACCGG
AATGGTACTTTCTATTTGCATACGCTATCCTTCGATCAATTCC";

$se2 = "GGACCAAGCCTGGCTGAGGGTCGTTTCGATAACACAAAACTGCTTGCGCGCCCCGTGGCGATGGTGACGAGAAAA
TGCACAAGACAGTATTGTCTCTGTTTTCTGTTACTTGCCACTGGATCGCGTACGAGCGATCGTTGGACGTTCGTC
TAGCGCCCGGAAGGGATTGCCGCCGACGTCGTCTGARATGAGGAAAGGTGTTGTKACGGCGTTAGTCGCGTTTTG
YGCGCGYCGACGAAACTCTTGAGAATATGTGTTGAGAGAGGATCGTGTGATTTAACACGACGCTCGGTCGCGCTC
TCCGCGAGTATCTCTCGTRARTGAGAGGAAGCNNGTGGGTCGCGCACATGTGCGTGTGTTGCGCGTCGCTCGTTT
TATATAAACA";

$consenso ="NNAACTTTATATTTTATTTTTGGAATTTGAGCAGGATTAATTGGTACTTCACTAAGATTACTTATTCGAACTGAATTAGGAACCCCCGGATCTTTAATTGGAGATGACCAAATTTATAATACTATTGTAACAGCTCATGCTTTTATTATAATTTTTTTTATAGTTATACCTATTATAATTGGAGGATTTGGTAATTGATTAGTCCCCTTAATAATAGGAGCCCCCGATATAGCTTTCCCACGAATAAATAATATAAGATTTTGATTATTACCCCCCTCTTTAACTTTACTAATTTCAAGAAGAATTGTTGAAAATGGTGCTGGTACCGGATGAACAGTTTATCCCCCCCTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGATTTAGCAATTTTTTCCCTACATCTTNCAGGTATTTCATCTATTCTTGGAGCTATTAATTTCATCACAACAATTATTAATATACGAATTAATAATTTATCTTTTGATCAAATACCCTTATTTGTATGAGCAGTAGGAATTACAGCATTATTATTATTATTATCTTTACCTGTTTTNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNA";
*/

switch($_SERVER['REQUEST_METHOD'])  //obtener parametros
{
	case 'GET': $opciones = &$_GET; break;
	case 'POST': $opciones = &$_POST; break;
	default: {header('HTTP/1.1 403 Forbidden');	die();
	}
}	
	
	
	//valida la primer secuencia
	if (isset($opciones['seq1']) && validaSecuencia($opciones['seq1']) ){ 
		$seq1 = strtoupper($opciones['seq1']);
		$alto = 120;
		$ancho =  strlen($opciones['seq1'])*1.5+20;
	}
	
	
	
	//valida si esta puesta y es valida la segunda secuencias
	if(isset($opciones['seq2'])&& validaSecuencia($opciones['seq2']) ){
		
		
		$seq2 = strtoupper($opciones['seq2']);
		$alineamiento = new needleman($seq1, $seq2);
		$secAlineadas = $alineamiento->alinear();
		$sA1 = $secAlineadas[0];
		$sA2 = $secAlineadas[1];
		//$Sconsenso ="NNAACTTTATATTTTATTTTTGGAATTTGAGCAGGATTAATTGGTACTTCACTAAGATTACTTATTCGAACTGAATTAGGAACCCCCGGATCTTTAATTGGAGATGACCAAATTTATAATACTATTGTAACAGCTCATGCTTTTATTATAATTTTTTTTATAGTTATACCTATTATAATTGGAGGATTTGGTAATTGATTAGTCCCCTTAATAATAGGAGCCCCCGATATAGCTTTCCCACGAATAAATAATATAAGATTTTGATTATTACCCCCCTCTTTAACTTTACTAATTTCAAGAAGAATTGTTGAAAATGGTGCTGGTACCGGATGAACAGTTTATCCCCCCCTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGATTTAGCAATTTTTTCCCTACATCTTNCAGGTATTTCATCTATTCTTGGAGCTATTAATTTCATCACAACAATTATTAATATACGAATTAATAATTTATCTTTTGATCAAATACCCTTATTTGTATGAGCAGTAGGAATTACAGCATTATTATTATTATTATCTTTACCTGTTTTNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNA";
		$alinear = true;
		//$ancho = max( array(strlen($opciones['seq1']), , ));
		
		if (isset($opciones['consenso'])&& $opciones['consenso'] ==1 ){ //solo desplegar el consenso
			$consenso = true;
			$alto = 170;
			$ancho = max(array(strlen($sA1)*1.5  + 20,strlen($sA2)*1.5  + 20));
		
		}else{
			$ancho = max(array(strlen($opciones['seq2'])*1.5+20, strlen($opciones['seq1'])*1.5+20, strlen($sA1)*1.5+ 20, strlen($sA2)*1.5  + 20));
			$alto = 320;
		}
	}

	
	//Inicializa la imagen 
	$image = imagecreate($ancho, $alto);
	$black = imagecolorallocate($image, 245, 245, 245);
	$xInicial = 10; //10px de margen.
	$ytop = 10;
	$yabajo = $alto- 10;
	
	
	if (!$consenso){
		generarBarcode($image, $xInicial, $ytop,  $seq1); //grafica secuencia 1
		//if (!empty($seq2))echo ">>".trim($seq2);
		if(isset($opciones['seq2']) && !empty($opciones['seq2'])){
			$ytop = $ytop + 75;			
			generarBarcode($image, $xInicial, $ytop,  $seq2); //grafica la secuencia 2
			$ytop = $ytop + 75;
			generarBarcode($image, $xInicial, $ytop,  $sA1); //grafica el alineamiento
			$ytop = $ytop + 75;
			generarBarcode($image, $xInicial, $ytop,  $sA2); //grafica el alineamiento
		}	
		
	}else //solo el consenso 
	{
		generarBarcode($image, $xInicial, $ytop,  $sA1); //grafica el alineamiento
		$ytop = $ytop + 75;
		generarBarcode($image, $xInicial, $ytop,  $sA2); //grafica el alineamiento
	}
	leyenda($image, $xInicial, $yabajo-10);
	header('content-type: image/png');
	imagepng($image); //save the image as a png and output
	imagedestroy($image);
	