<?php

 	include("Pessoa.php");

 	$pessoa=new Pessoa("Brener Eduardo Rodrigues", "142.134.636.21", "19");

 	$pessoa_2=new Pessoa("Wallison", "99999999999", "45");

 	//var_dump($pessoa);

 	/*
 	$pessoa->setNome("Brener Eduardo Rodrigues"); 
 	$pessoa->setCpf("142.134.636.21"); 
 	$pessoa->setIdade("19"); 
	*/

 	$json=json_encode($pessoa);
 	echo "Json: <br>";
 	echo $json."<br>";

 	echo "Pessoa 1: <br>";
 	echo $pessoa->__toString();
 	echo "<br>";

 	echo "Pessoa 2: <br>";
 	echo $pessoa_2->__toString();
 	echo "<br>";

 	$pessoa_2->setIdade("28");

 	echo "Nova idade:".$pessoa_2->getIdade()."<br>";

 	?>