<?php 
	session_start();
	include('funcoes.php');

	if($_REQUEST['pesquisa'] != ' ' && $_REQUEST['pesquisa'] != null){

		$pesquisa = $_REQUEST['pesquisa'];
		$banco = conexao();
		$query = "

			SELECT * FROM posts
			WHERE posts.titulo like '%".$pesquisa."%'

		";

		$info = $banco->query($query);
		$lista = $info->fetchAll();

		menu();
		include('mostrar_pesquisa.php');
		rodape();
	}

?>