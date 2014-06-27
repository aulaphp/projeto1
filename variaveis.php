<?php
/**
 * @desc Manipulando variáveis
 * @author Nataniel Paiva
 * 
 * */
/*Variável por referência*/
$a  = 5;
$b  = &$a;
$a  = $a + 52;
echo $b;
//saída 57

echo "<br>";
/*Variável de variável*/
$x = "hello";
$$x= " Mundo";
echo $x . $hello ;
//saída hello Mundo
/*Formas de criar uma variável*/
$_oi = "1";
$oi  = "1";
//Essa linha abaixo daria erro, pois o php não permite que você crie uma variável
//iniciando com um número.
//$5oi = "1";
