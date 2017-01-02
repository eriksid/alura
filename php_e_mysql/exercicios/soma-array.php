<?php 

$numeros = array(10,10,10,10);

function somarArray($array){
	$total = 0;
	for ($i=0; $i <sizeof($array); $i++) { 
		
		$total =  $total + $array[$i];
		
	}
	return $total;
}
$totalNumeros = somarArray($numeros);
echo "A soma do array numeros é:$totalNumeros ";

 ?>