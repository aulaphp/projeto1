<?php
/**
 * Condições em PHP
 * 
 */
/*
 * $x = 2; $x = 4; if ( $x > 10 ) { echo "Essa variável é maior do que 10"; }else if( $x == 4 ){ echo "Essa variável é menor do que 10"; }else{ echo "Essa variável"; }
 */
/**
 * Criar uma variável para guardar o tipo de operação
 * criar duas variáveis com valores inteiros para calcular
 * Vai fazer a conta de acordo com o tipo de operação que estiver
 * na variável
 *
 * exibir o a operação na tela.
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
		echo "o VALOR É" . $valor1 / $valor2;
		break;
	default:
		echo "NDA";
		break;	
}



/**
 * operadores ê  (&&)   ou( || )
 * 
 */

$x = 10;
$y = 20;


if ( $x > 3 || $y > 40 ) {
	echo "Deu certo";
}else{
	echo "Não deu";
}





