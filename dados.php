<?php 
	 
	$a = $_POST['primeiroValor'];
	$b = $_POST['segundoValor'];
	$total = $a + $b;	
	echo $total . "<br>";
	$total = $a / $b;
	echo $total . "<br>";
	$total = $a * $b;
	echo $total . "<br>";
?>