Primeiro projeto da aula de PHP com Nataniel Paiva
=======================

Introdução
------------

Esse primeiro projeto contempla os seguintes tópicos:

* HTML e algumas tags.
* Criar um formulário com HTML.
* Como recuperar um dado enviado de um formulário usando PHP.
* Declarando e manipulando variáveis em PHP.
* Instruções de condição if e else, switch e case
* Operadores && e ||
* Declarando e manipulando Arrays em PHP.



Criando nosso primeiro código em HTML
--------------------------------------------

Estamos utilizando no curso o Eclipse como IDE, então vamos criar o nosso primeiro projeto utilizando a IDE.
Nosso primeiro projeto se chamará projeto1, depois que criarmos o projeto1, dentro dele vamos criar um arquivo chamado index.html 
com o seguinte código:
~~~html
	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
		<head>
			<meta charset="utf-8"> 
			<title>
				Titulo do HTML
			</title>
		</head>
	<body>
		Aqui é o corpo do seu html
	</body>	
	</html>
~~~	

Criar formulário em HTML
-------------------------

Esse é o nosso primeiro código em HTML, uma liguagem de marcação de texto.
Agora vamos criar nosso primeiro formulário em HTML utilizando o método post que foi dito em aula com o seguinte código:
~~~html
	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
		<head>
			<meta charset="utf-8">
			<title>
				Meu primeiro Formulário
			</title>
		</head>
	<body>
		<form action="dados.php" method="post" >
			<label>Digite seu nome:</label>
			<input type="text" name="nome" />
			<input type="submit" value="Salvar"/>
		</form>
	</body>	
	</html>	
~~~	

Recuperando os dados do formulário no PHP
-------------------------------------------

Para recuperar esses dados via PHP, vamos criar um arquivo em nosso projeto chamado dados.php e nele vamos
colocar o seguinte código:
~~~php
	<?php
	$pegarNome = $_POST['nome'];
	echo $pegarNome;
~~~
Com isso todas as vezes que você submeter o seu formulário poderemos recuperar o parametro "nome" que foi definido em nosso campo
input text.

 Declarando e manipulando variáveis em PHP.
-------------------------------

Como vimos em nossas aulas, o PHP como as outras linguagens de programação possui algo chamado variável que é onde podemos manipular
dados em nosso sistema.
Relembrando a nossa aula, temos que ficar ciente de que em PHP as variáveis começam com o caracter $ seguindo de alguma letra ou _
se tentarmos depois do cifrão colocar um número o PHP vai dar um erro.
Vamos relembrar vendo nosso arquivo de variaveis.php
~~~php
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
~~~	

Instruções de condição if e else, switch e case
-------------------------------------------------

Primeiro vamos usar o if para criar nossa calculadora, como fizemos em sala usaremos um formulário para enviar os dados,
mas aqui só mostrarei a parte do PHP, qualquer dúvida no HTML baixe o zip do projeto1.
Segue abaixo o código abaixo utilizando o if e else.

~~~php
<?php

$valor1     = $_POST['primeiroValor'];
$valor2     = $_POST['segundoValor'];
$operacoes  = $_POST['operacoes'];

if ( $operacoes == "+" ) {
	$resultado = $valor1 + $valor2;
	echo "O valor dessa operação é {$resultado}" ;
}else if ( $operacoes == "-" ) {
	$resultado = $valor1 - $valor2;
	echo "O valor dessa operação é " . $resultado ;
}else if ( $operacoes == "*" ) {
	$resultado = $valor1 * $valor2;
	echo "O valor dessa operação é $resultado" ;
}else if  ( $operacoes == "/" ){
	$resultado = $valor1 / $valor2;
	echo "O valor dessa operação é {$resultado}" ;
}

~~

Muito simples né, nossa estrutura de condição com o if é muito simples, mas quando tempo uma grande quantidade
de condições podemos utilzar o switch case, relembre a sintaxe abaixo:

~~~php
<?php

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

~~~

Podemos utilizar em condições simples o if ternário que utiliza a seguinte sintaxe:

~~~php
<?php 

$a = 12;

echo $a == 10 ? "a é igual a 10": "a não é igual a 10";
~~~

Operadores && e ||
-------------------

Muitas vezes em nossas condições poderemos utilizar os operadores && e ||,
vamos ver o exemplo que vimos em classe com a sintaxe abaixo:
~~~php
<?php 
	$x = 10;
	$y = 20;
	
	
	if ( $x > 3 || $y > 40 ) {
		echo "Deu certo";
	}else{
		echo "Não deu";
	}
	
	//retorno será "Deu certo", pois uma das alternativas foi verdadeira
	
	<?php 
	$a = 10;
	$b = 20;
	
	
	if ( $a > 3 && $b > 40 ) {
		echo "Deu certo";
	}else{
		echo "Não deu";
	}
	
	//retorno será "Não deu", pois uma das alternativas foi falsa
~~~

Declarando e manipulando Arrays em PHP.
---------------------------------------

Variáveis podem possuir apenas um valor para cada variável, por isso temos algo em PHP chamado array, que seriam vetores e matrizes pelo
qual podemos manipular grandes quantidades de dados, vamos relembrar com o seguinte código abaixo:
~~~php
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
~~~	
	