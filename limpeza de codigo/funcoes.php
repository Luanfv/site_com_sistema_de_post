<?php

	function situacao(){
		if($_SESSION['logado'] != 'sim' || !isset($_SESSION['logado'])){
			return 'Deslogado';
		} else {
			return 'Logado';
		}
	}

	function situacao_menu(){
		if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'sim'){
			include('menu_logado.php');
		} else {
			include('menu_deslogado.php');
		}
	}

	function verifica_login(){
		if($_SESSION['logado'] != 'sim'){
			header('location: home.php');
		}
	}

	function conexao(){
		$host = 'mysql:host=localhost;dbname=postagens';
		$nome = 'root';
		$senha = '';

		$banco = new PDO($host, $nome, $senha);
		return $banco;
	}

	function add_post($titulo, $descricao, $resumo, $data, $posicao, $img){

		$banco = conexao();

		$query = "

			INSERT INTO posts (titulo, resumo, texto, posicao, data, imagem)
			VALUES ('".$titulo."', '".$resumo."', '".$descricao."', '".$posicao."', '".$data."', '".$img."');

		";

		$retorno = $banco->exec($query);
		echo $retorno;
	}

	function retornar_post(){
		$banco = conexao();

		$query = "

			SELECT * FROM posts

		";

		$info = $banco->query($query);
		$lista = $info->fetchAll();

		return $lista;
	}

	function recentes_posts(){
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

		return $recentes;
	}

?>