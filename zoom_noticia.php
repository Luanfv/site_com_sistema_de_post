<?php
	session_start();
	include('funcoes.php');

	if(isset($_REQUEST['postagem'])){
		$banco = conexao();
		$query = "

			SELECT * FROM posts WHERE cdpost = '".$_REQUEST['postagem']."'

		";

		$info = $banco->query($query);
		$lista = $info->fetchAll();

		include('noticia.php');
	}
?>