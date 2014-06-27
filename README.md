Primeiro projeto da aula de PHP com Nataniel Paiva
=======================

Introdução
------------

Esse primeiro projeto contempla os seguintes tópicos:

* HTML e algumas tags.
* Criar um formulário com HTML.
* Como recuperar um dado enviado de um formulário usando PHP.
* Declarando e manipulando variáveis em PHP.
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
Para recuperar esses dados via PHP, vamos criar um arquivo em nosso projeto chamado dados.php e nele vamos
colocar o seguinte código:
~~~php
	<?php
	$pegarNome = $_POST['nome'];
	echo $pegarNome;
~~~
Com isso todas as vezes que você submeter o seu formulário poderemos recuperar o parametro "nome" que foi definido em nosso campo
input text.

Declaração de variáveis em PHP
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
	