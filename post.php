<?php 
	session_start();
	include('funcoes.php');

	verifica_login();

	$_SESSION['erro_cadastro'] = null;


	if($_SESSION['logado'] != 'sim')
		include('deslogado.php'); 

	if($_REQUEST['titulo'] != null && $_REQUEST['descricao'] != null && $_REQUEST['resumo'] != null && $_FILES['imagem']['name'] != null){

		$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "fotos/";

		if(!move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)){
			echo("Erro imagem" . $_FILES['imagem']['tmp_name'] . "," . $diretorio . $novo_nome );

		}

		$titulo = $_REQUEST['titulo'];
		$descricao = $_REQUEST['descricao'];
		$resumo = $_REQUEST['resumo'];
		$posicao = $_REQUEST['posicao'];

		
	
		add_post($titulo, $descricao, $resumo, date('Y/m/d  H:i:s'), $posicao, $novo_nome);

		header('location: home.php');
	}
	else{
		header('location: cadastrar.php?erro=sim');
	}

	
	
?>