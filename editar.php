<?php
	session_start();
	include('funcoes.php');

	if($_SESSION['logado'] != 'sim'){
		header("location: home.php");
	}

		$banco = conexao();
		
		if(@$_FILES['imagem']['name'] == null){
			$banco->query("

			UPDATE posts SET titulo = '".$_REQUEST['titulo']."',
			resumo = '".$_REQUEST['resumo']."',
			texto = '".$_REQUEST['descricao']."'
			
			WHERE cdpost = '".$_SESSION['id']."'

		");

			header('location: home.php?editar=sem-img');
		} else {
			$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
			$novo_nome = md5(time()) . $extensao;
			$diretorio = "fotos/";

			if(!move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)){
				echo("Erro imagem" . $_FILES['imagem']['tmp_name'] . "," . $diretorio . $novo_nome );

			}

			$banco->query("

			UPDATE posts SET titulo = '".$_REQUEST['titulo']."',
			resumo = '".$_REQUEST['resumo']."',
			texto = '".$_REQUEST['descricao']."',
			imagem = '".$novo_nome."'
			
			WHERE cdpost = '".$_SESSION['id']."'

		");

			header('location: home.php?editar=com-img');
		}
	

?>