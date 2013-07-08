<?php
function validaSecuencia ($secuencia){
	if (preg_match('/[ACTUG]+/', $secuencia))
		return true;
	else
		return false;	
}
function imagelinethick($image, $x1, $y1, $x2, $y2, $color, $thick = 1)
{
	/* this way it works well only for orthogonal lines
	 imagesetthickness($image, $thick);
	return imageline($image, $x1, $y1, $x2, $y2, $color);
	*/
	if ($thick == 1) {
		return imageline($image, $x1, $y1, $x2, $y2, $color);
	}
	$t = $thick / 2 - 0.5;
	if ($x1 == $x2 || $y1 == $y2) {
		return imagefilledrectangle($image, round(min($x1, $x2) - $t), round(min($y1, $y2) - $t), round(max($x1, $x2) + $t), round(max($y1, $y2) + $t), $color);
	}
	$k = ($y2 - $y1) / ($x2 - $x1); //y = kx + q
	$a = $t / sqrt(1 + pow($k, 2));
	$points = array(
			round($x1 - (1+$k)*$a), round($y1 + (1-$k)*$a),
			round($x1 - (1-$k)*$a), round($y1 - (1+$k)*$a),
			round($x2 + (1+$k)*$a), round($y2 - (1-$k)*$a),
			round($x2 + (1-$k)*$a), round($y2 + (1+$k)*$a),
	);
	imagefilledpolygon($image, $points, 4, $color);
	return imagepolygon($image, $points, 4, $color);
}

function generarBarcode($image, $xInicial, $ytop, $seq){
	
	$secuencia = str_split($seq,1);
	$yellow = imagecolorallocate($image, 236, 245, 12);
	$green = imagecolorallocate($image, 92, 65, 65);
	$red = imagecolorallocate($image, 255, 0, 0);
	$white = imagecolorallocate($image, 255, 255, 255);
	$purple = imagecolorallocate($image, 245, 5, 245);
	$blue = imagecolorallocate($image, 25, 0, 240);
	$back = imagecolorallocate($image, 0, 0, 0);
	
	$yabajo = $ytop + 60;
	$xactual = $xInicial;
	for ($i=0;$i<strlen($seq);$i++){
		if ($i%50 == 0){
			imagefttext ($image, 6, 0, $xactual, $ytop-3, $back, 'LucidaSansRegular.ttf', $i);
		}
		switch ($secuencia[$i]){
			case 'A': imagelinethick($image, $xactual, $ytop, $xactual, $yabajo, $blue);
			break;
			case 'C': imagelinethick($image, $xactual, $ytop, $xactual, $yabajo, $red);
			break;
			case 'T': imagelinethick($image, $xactual, $ytop, $xactual, $yabajo, $green);
			break;
			case 'U': imagelinethick($image, $xactual, $ytop, $xactual, $yabajo, $green);
			break;
			case 'G': imagelinethick($image, $xactual, $ytop, $xactual, $yabajo, $yellow);
			break;
			default: imagelinethick($image, $xactual, $ytop, $xactual, $yabajo, $purple);
			break;
		}
		$xactual +=1.5;
	}
	
}

function leyenda($image, $xInicial, $yabajo){
	$yellow = imagecolorallocate($image, 236, 245, 12);
	$green = imagecolorallocate($image, 92, 65, 65);
	$red = imagecolorallocate($image, 255, 0, 0);
	$white = imagecolorallocate($image, 255, 255, 255);
	$purple = imagecolorallocate($image, 245, 5, 245);
	$blue = imagecolorallocate($image, 25, 0, 240);
	$back = imagecolorallocate($image, 0, 0, 0);
	$yabajo += 10;
	$xnota = $xInicial;
	imagefttext ($image, 8, 0, $xnota, $yabajo, $back, 'LucidaSansRegular.ttf', "A");
	imagelinethick($image, $xnota+8, $yabajo-5, $xnota+18, $yabajo-5, $blue,3);
	$xnota+=25;
	imagefttext ($image, 8, 0, $xnota, $yabajo, $back, 'LucidaSansRegular.ttf', "C");
	imagelinethick($image, $xnota+8, $yabajo-5, $xnota+18, $yabajo-5, $red,3);
	$xnota+=25;
	imagefttext ($image, 8, 0, $xnota, $yabajo, $back, 'LucidaSansRegular.ttf', "T/U");
	imagelinethick($image, $xnota+25, $yabajo-5, $xnota+35, $yabajo-5, $green,3);
	$xnota+=40;
	imagefttext ($image, 8, 0, $xnota, $yabajo, $back, 'LucidaSansRegular.ttf', "G");
	imagelinethick($image, $xnota+8, $yabajo-5, $xnota+18, $yabajo-5, $yellow,3);
	$xnota+=25;
	imagefttext ($image, 8, 0, $xnota, $yabajo, $back, 'LucidaSansRegular.ttf', "Gap");
	imagelinethick($image, $xnota+25, $yabajo-5, $xnota+35, $yabajo-5, $purple,3);
	$xnota+=25;
}
