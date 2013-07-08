<?php
/**
 * Alineamiento Needleman Wunsh
 * @author Federico Matarrita
 *
 */
define("DPENALIZACION", "Hello world.");
class needleman {	 
	private $secuencia1;
	private $secuencia2;
	private $s1;
	private $s2;
	private $alineamiento_s1;
	private $alineamiento_s2;
	
	public function __construct($secuencia1, $secuencia2){		
		$this->secuencia1 = strtoupper($secuencia1);
		$this->secuencia2 = strtoupper($secuencia2);
		$this->s1 = str_split($this->secuencia1,1);
		$this->s2 = str_split($this->secuencia2,1);
		
	}
	
	public function alinear(){
		ini_set('max_execution_time', 150); //300 seconds = 5 minutes
		$alineamiento = array();
		//Inicializa la matriz en cero para la primer columna y fila 
		for ($i =0; $i<= strlen($this->secuencia1);$i++ )
			$alineamiento[$i][0]=$i * DPENALIZACION;
		for ($j = 0; $j<= strlen($this->secuencia2);$j++)
			$alineamiento[0][$j] = $j * DPENALIZACION;
		
		//Llena la matriz de puntuacion
		for($i = 1; $i<= (strlen($this->secuencia1)-1);$i++ ){
			for ($j = 1; $j<= (strlen($this->secuencia2)-1);$j++)
			{
				$puntuacion = array();
				$puntuacion[] = $alineamiento[$i-1][$j-1] + $this->puntaje($this->s1[$i], $this->s2[$j]);
				$puntuacion[] = $alineamiento[$i-1][$j]+ DPENALIZACION;
				$puntuacion[] = $alineamiento[$i][$j-1]+ DPENALIZACION;
				$alineamiento[$i][$j]= max($puntuacion);	
			}//for j
		}//for i
		
		//Recorrido de vuelta por la matriz 
		$this->alineamiento_s1='';
		$this->alineamiento_s2='';		
		$i = strlen($this->secuencia1)-1;
		$j = strlen($this->secuencia2)-1;
		///var_dump($alineamiento);
		//die();
		while ($i>0 && $j>0):
		//echo $i.' - '.$j."<br />";
		
		$puntaje = $alineamiento[$i][$j];
		$puntaje_diagonal = $alineamiento[$i-1][$j-1];
		$puntaje_arriba = $alineamiento[$i][$j-1];
		$puntaje_izquierda = $alineamiento[$i-1][$j];
		//va por la diagonal de la matriz se alinean
		if ($puntaje == $puntaje_diagonal+$this->puntaje($this->s1[$i], $this->s2[$j])){
			$this->alineamiento_s1 = $this->s1[$i-1].$this->alineamiento_s1;
			$this->alineamiento_s2 = $this->s2[$j-1].$this->alineamiento_s2;
			$i--;
			$j--;
		}elseif($puntaje == $puntaje_izquierda + DPENALIZACION){ //gap en la segunda secuencia
			$this->alineamiento_s1 = $this->s1[$i-1].$this->alineamiento_s1;
			$this->alineamiento_s2 = "-".$this->alineamiento_s2;
			$i--;			
		}elseif($puntaje == $puntaje_arriba + DPENALIZACION){ //gap en la primer secuencias
		$this->alineamiento_s1 = "-".$this->alineamiento_s1; 
		$this->alineamiento_s2 = $this->s2[$j-1].$this->alineamiento_s2;
		$j--;
		}
		
		endwhile;
		
		while ($i>0):
			$this->alineamiento_s1 = $this->s1[$i-1].$this->alineamiento_s1;
			$this->alineamiento_s2 = "-".$this->alineamiento_s2;
			$i--;			
		endwhile;
		while ($j>0):
			$this->alineamiento_s1 = "-".$this->alineamiento_s1;
			$this->alineamiento_s2 = $this->s2[$j-1].$this->alineamiento_s2;
			$j--;
		endwhile;
		
		return array($this->alineamiento_s1,$this->alineamiento_s2);
			
			
	}
	
	/**
	 * devuelve el puntaje de comparacion entre dos letras 
	 * @param char $a
	 * @param char $b
	 */	
	private function puntaje($a,$b){
		
		if ($a == '-' || $b =="-")
			return DPENALIZACION;
		elseif ($a == $b)
			return 1;
		else 
			return -1; //a != b 
		
	}
}