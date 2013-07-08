<!DOCTYPE html>
<html>
<head>
<title>Alineamiento de Secuencias</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/docs.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<div class="row">
		<nav class="span3 bs-docs-sidebar" >
			<ul class="nav nav-list bs-docs-sidenav affix">
				<li><h2>Ejemplos</h2></li>
				<li><a href="barrasAdn.php?seq=TGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT"><i class="icon-chevron-right"></i>Graficar una secuencia</a></li>
				<li><a href="barcode.php?seq1=TGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT&seq2=AACTCTATATTTTATTTTTGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT&consenso=0"><i class="icon-chevron-right"></i>Graficar dos secuencias y alineamiento</a></li>
				
				<li><a href="barcode.php?seq1=TGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT&seq2=AACTCTATATTTTATTTTTGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT&consenso=1"><i class="icon-chevron-right"></i>Graficar solo alineamiento</a></li>
			<li>Realizado por Federico Matarrita Arata<br />
			Universidad de Costa Rica<br />
			Curos de Bioinform&aacute;tica<br /><br />
			<a href="https://github.com/usematics/nedleeman">C&oacute;digo fuente en Github</a>
			</li>
			</ul>
		
			
		
		</nav>
		<div class="row">
		<article class="span9">
			<h1>Alineamiento Visual de Secuencias</h1>
			<img src="barrasAdn.php?seq=TTACTAATTTACTGTCAACAATTCCATATCTAGGTAATGATATTGTAATATGAGTATGAGGGGGATTTTCAATTAATAACTCTACCCTTAATCGATTTTACTCTATCCATTTTATCCTACCGTTCCTGATCTTAATATTAATAATTACACACTTAATATTTCTCCATGAATCAGGGTCTTCAAATCCACTTGGGGTTAAAAGAGACCTAAATAAAATCCCTTTCCACATCTACTTTACTATTAAAGATTTATACATATTTATATTAATTATTTTAATATTCTCAACCGTTATCCTCCAGTATCCATATATATTTAGAGATCCAGACAACTTTACCTCAGCAAATCCTATGGTCACACCAGTCCACATCCAACCGGAATGGTACTTTCTATTTGCATACGCTATCCTTCGATCAATTCC" alt="secuencia representada en forma de codigo de barras"/>
			<form id="fAlineamiento" action="barcode.php" method="get" onsubmit="return validar();"><!--   -->
			  <fieldset>
			 <div class="row"> 
			  <div id="ctr-seq1" class="control-group  span8">
				<label class="control-label" for="inputError">Secuencia 1: <span class="help-inline">Escriba la secuencia 1 en formato RAW </span><span style="float:right"><a href="#" onClick="return cargaSeq1();">Cargar Ejemplo</a></span></label>
				 
				  <div class="controls">
				    <textarea  name="seq1" id="seq1" class="span8" rows="5" placeholder="Escriba la secuencia en formto RAW"></textarea>
				   
				  </div>
				</div>
			  </div>
			  
			   <div class="row"> 
			  <div id="ctr-seq2" class="control-group  span8">
				<label class="control-label" for="seq2">Secuencia 2: <span class="help-inline">Escriba la secuencia 2 en formato RAW </span><span style="float:right"><a href="#" onClick="return cargaSeq2();">Cargar Ejemplo</a></span></label>
				 
				  <div class="controls">
				    <textarea name="seq2" id="seq2" class="span8" rows="5" placeholder="Escriba la secuencia en formto RAW"></textarea>
				   
				  </div>
				</div>
			  </div>
			  
			    <legend>Alineamiento Needleman-Wunsch</legend>
			    <label></label>
			    
			   
			    <label class="checkbox">
			      <input name="consenso" id="consenso" type="checkbox"> Graficar solo el alineamiento
			    </label>
			    <button type="button" id="btnAlinear" onClick="validar();" class="btn btn-primary">Alinear y Graficar.</button>
			    <button type="button" id="btnLimpiar" onClick="limpiar();" class="btn btn-info">Limpiar</button>
			  </fieldset>
			</form>	
		<aside class="row">
		<div class="barcode" id="resultado"></div>
		<div class="">
			<p>Agregar a su sitio web:</p>
			<textarea id="code1" class="span5" rows="4"> &lt;img src="http://bioinformatica.usematics.com/ws/needleman/barcode?seq1=ATCGATCGATCGATCGATCG" /&gt;</textarea>
			<p>Para incluir el gr&aacute;fico de una secuencia en en su sitio web puede llamarla de la siguiente forma:</p>
			<code>&lt;img src="http://bioinformatica.usematics.com/ws/needleman/barcode?seq1=ATCGATCGATCGATCGATCG" /&gt;</code>
			<p>Para incluir el gr&aacute;fico de dos secuencias y su alineamiento en en su sitio web puede llamarla de la siguiente forma:</p>
			<code> &lt;img src="http://bioinformatica.usematics.com/ws/needleman/barcode?seq1=ATCGATCGATCGATCGATCG&seq2=ATCGATCGATCGATCGATCG" /&gt;</code>
			<p>Para incluir el gr&aacute;fico de una secuencia en en su sitio web puede llamarla de la siguiente forma:</p>
			<code> &lt;img src="http://bioinformatica.usematics.com/ws/needleman/barcode?seq1=ATCGATCGATCGATCGATCGseq2=ATCGATCGATCGATCGATCG&consenso=1" /&gt;</code>
		
		</div>
		</aside>		
		</article>
		
		</div>
		
	</div>
	
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">

function cargaSeq1(){
	document.getElementById('seq1').value ="TGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT";
	return false;
}
function cargaSeq2(){
	document.getElementById('seq2').value = "AACTCTATATTTTATTTTTGGAATTTGAGCAGGTTTAGTTGGAACTTCATTAAGTCTTCTAATTCGTACTGAATTAGGTACCCCAGGATCTTTAATTGGAGACGACCAAATTTATAATACTATTGTAACAGCTCATGCATTTATTATAATTTTTTTCATAGTAATACCTATTATAATTGGAGGATTTGGAAATTGATTAGTACCCTTAATATTAGGAGCTCCAGATATAGCATTTCCTCGAATAAATAATATAAGATTTTGATTATTACCCCCATCCTTGACCCTATTAATTTCAAGAAGTATTGTAGAAAATGGTGCTGGTACTGGTTGAACTGTATATCCCCCACTTTCATCTAATATTGCCCACCAAGGAGCTTCTGTTGACTTAGCAATTTTTTCCCTTCATCTTGCAGGTATTTCTTCTATTTTAGGAGCTATTAATTTTATTACAACTATTATTAATATACGAATTAATAATATATCATTTGATCAAATACCATTATTTGTTTGAGCAGTAGGAATTACTGCTTTATTATTATTACTTTCTTTACCAGTTTTAGCTGGTGCTATTACTATATTATTAACAGACCGAAATCTTAATACTTCATTTTTTGATCCTGCTGGAGGAGGTGATCCTATTTTATACCAACATTTATTT";
	return false; 
}

function limpiar(){
	document.getElementById('seq1').value ="";
	document.getElementById('seq2').value ="";
	document.getElementById('consenso').checked = false;
	document.getElementById("resultado").innerHTML="";
	document.getElementById("code1").innerHTML='&lt;img src="http://bioinformatica.usematics.com/ws/needleman/barcode?seq1=ATCGATCGATCGATCGATCG" /&gt;';
	document.getElementById('ctr-seq2').className = "control-group  span8";
	document.getElementById('ctr-seq1').className = "control-group  span8";
	
}
function validar(){
	var seq = document.getElementById('seq1').value; 
	var sq1 =  seq.match(/[ACTUG]+/);
	var error = true;
	var url = "barcode.php?seq1=";
	if (sq1 == null){
		document.getElementById('ctr-seq1').className += " error";
		error = false;		
	}
	else{ 
		document.getElementById('ctr-seq1').className += " success";
		url+=seq;
	}
	if (document.getElementById('seq2').value.length > 0){
		var sec2 = document.getElementById('seq2').value;
		var sq2 =  sec2.match(/[ACTUG]+/);
		if (sq2 == null){
			document.getElementById('ctr-seq2').className += " error";
			error = false;		
		}
			else {
				document.getElementById('ctr-seq2').className += " success";
				url+="&seq2="+sec2;
				if (document.getElementById('consenso').checked)
				{
					url+="&consenso=1";
				}
			}
		
	}
	if (error){

		
		
		
		 
		   document.getElementById("resultado").innerHTML='<img src="'+url+'" alt="'+document.getElementById('seq1').value+'" />';
		   document.getElementById("code1").innerHTML='&lt;img src="http://bioinformatica.usematics.com/ws/needleman/'+url+'" /&gt;';
		  return true;
		 
		 
		
	}
	return error;
}


</script>
</body>
</html>

<?php
