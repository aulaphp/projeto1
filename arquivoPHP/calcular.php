<?php

$valor1     = $_POST['primeiroValor'];
$valor2     = $_POST['segundoValor'];
$operacoes  = $_POST['operacoes'];

if ( $operacoes == "+" ) {
	$resultado = $valor1 + $valor2;
	echo "O valor dessa opera��o � {$resultado}" ;
}else if ( $operacoes == "-" ) {
	$resultado = $valor1 - $valor2;
	echo "O valor dessa opera��o � " . $resultado ;
}else if ( $operacoes == "*" ) {
	$resultado = $valor1 * $valor2;
	echo "O valor dessa opera��o � $resultado" ;
}else if  ( $operacoes == "/" ){
	$resultado = $valor1 / $valor2;
	echo "O valor dessa opera��o � {$resultado}" ;
}


