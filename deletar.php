<?php
	session_start();
	include('funcoes.php');

	if($_SESSION['logado'] != 'sim')
		header("location: home.php");


	if(isset($_REQUEST['delete'])){
		$banco = conexao();
		
		$banco->query("

			DELETE FROM posts WHERE cdpost = '".$_REQUEST['delete']."'

		");

		header('location: home.php?editar=deletado');
	}

?>