<?php
	/**
	 * Vari�veis no PHP
	 */

	$bolinha = "Jo�o";
	$inteiro = 12;
	
	$inteiro = 15;
	
	$inteiro = "12";
	
	$inteiro = (int) $inteiro;
	
	var_dump($inteiro);
	
	
	/**
	 * Constantes no PHP
	 */
	
	const MEDIA = 70;
	
	
	/*Vari�vel por refer�ncia*/
	$laranja  = 5;
	$bolinha  = &$laranja;
	$laranja  = $laranja + 52;
	
	echo $bolinha;
	//sa�da 57
/**
 * Escreva duas vari�veis que ir�o iniciar com o valor nulo,
 * depois atribua um valor inteiro para cada vari�vel;
 * depois some os valores colocando o total em outra vari�vel;
 * e exiba na tela o tipo e o valor de total;
 * 
 */	
	
	
$variavel1 = null;
$variavel2 = null;
$variavel1 = 20;
$variavel2 = 30;

$totalDessasVariaveis = $variavel1 + $variavel2;

var_dump($totalDessasVariaveis);
	
	
	
?>