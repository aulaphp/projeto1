<?php
/**
 * Condi��es em PHP
 * 
 */
/*
 * $x = 2; $x = 4; if ( $x > 10 ) { echo "Essa vari�vel � maior do que 10"; }else if( $x == 4 ){ echo "Essa vari�vel � menor do que 10"; }else{ echo "Essa vari�vel"; }
 */
/**
 * Criar uma vari�vel para guardar o tipo de opera��o
 * criar duas vari�veis com valores inteiros para calcular
 * Vai fazer a conta de acordo com o tipo de opera��o que estiver
 * na vari�vel
 *
 * exibir o a opera��o na tela.
 */
const operacao = "*";
$valor1 = 12;
$valor2 = 12;

if (operacao == "+") {
	echo $valor1 + $valor2;
} else if (operacao == "-") {
	echo $valor1 - $valor2;
} else if (operacao == "*") {
	echo $valor1 * $valor2;
} else if (operacao == "/") {
	echo $valor1 / $valor2;
}
/**
 * Switch case PHP
 */


switch (operacao) {
	case "+" :
		echo $valor1 + $valor2;
		break;
	case "-" :
		echo $valor1 - $valor2;
		break;
	case "*" :
		echo $valor1 * $valor2;
		break;
	case "/" :
		echo "o VALOR �" . $valor1 / $valor2;
		break;
	default:
		echo "NDA";
		break;	
}



/**
 * operadores �  (&&)   ou( || )
 * 
 */

$x = 10;
$y = 20;


if ( $x > 3 || $y > 40 ) {
	echo "Deu certo";
}else{
	echo "N�o deu";
}





