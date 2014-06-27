<?php
/**
* @desc Declaração de Arrays
* @author Nataniel Paiva
* 
 */
/* Vamos ver como declarar e manipular arrays no php */

// declaração de um simples array
$vetor = array (
		1 => "Caminhao",
		3 => "Carro" 
);
print_r ( $vetor );

// declaração de um simples array na versão 5.4 em diante
$vetor2 = [ 
		1 => "Caminhao",
		3 => "Carro" 
];
print_r ( $vetor2 );

// declaração de um array multidimencional
$matriz = array (
		"Linha1" => array (
				"Coluna1",
				"Coluna2" 
		),
		"Linha2" => array (
				"Coluna1",
				"Coluna2" 
		) 
);
echo "<pre>";
print_r($matriz);
echo "</pre>";

// declaração de um array multidemencional na versão 5.4 em diante
$matriz2 = [
		"Linha1" => [
				"Coluna1",
				"Coluna2"
		],
		"Linha2" => [
				"Coluna1",
				"Coluna2"
		]
];
echo "<pre>";
print_r($matriz2);
echo "</pre>";