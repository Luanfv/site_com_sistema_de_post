<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css\posts.css">
			<title>
				Novo post
			</title>
		</head>

<?php 
	session_start();

	if($_SESSION['logado'] != 'sim')
		include('deslogado.php'); 

	include('funcoes.php');

	menu();
	include("inc_formcadastro.php");
	rodape();
?>