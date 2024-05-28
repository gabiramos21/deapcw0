<?php


	$query = "INSERT INTO Encomendas VALUES (";
	$query .= "'". $_GET['nome'] . "',";
	$query .= "'".$_GET['morada']."'.";
	$query .=  $_GET['cod'] . ", ";
	$query .= $_GET['quantidade'] ;
	$query .=  ")";
	
	echo $query;
	
	$db = new SQLite3('loja.sqlite');
	
	$db->close();
?>

<p>A encomenda foi registada.</p>

<a href='lista.php'>Voltar ao inicio</a>







"confirmar.php" 24L, 423B written
