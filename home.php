<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css\menu.css">
			<link rel="stylesheet" type="text/css" href="css\home.css">
			<link rel="stylesheet" type="text/css" href="css\rodape.css">
			<title>
				Home
			</title>
		</head>

<?php

	session_start();
	include('funcoes.php');
	$banco = conexao();

	$query = "

			SELECT * FROM posts

	";

	$info = $banco->query($query);
	$lista = $info->fetchAll();
	$recentes = null;

	$a = count($lista);

	$b = $a - 4;	

	for($i = $b; $i < $a; $i ++){
		$recentes[] = $lista[$i];
	}

	
	include('conteudo_home.php');


?>
