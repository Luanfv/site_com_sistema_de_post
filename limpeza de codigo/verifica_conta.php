<?php
	
	session_start();
	$_SESSION['erro_login'] = '';

	function verifica_contas(){
		$login = null;
		$senha = null;

		if(isset($_REQUEST['login']) && isset($_REQUEST['senha'])){
			$login = $_REQUEST['login'];
			$senha = $_REQUEST['senha'];
		}

		include('contas.php');

		for($i = 0; $i < count($usuarios); $i++){

			if($login == $usuarios[$i]['login'] && $senha == $usuarios[$i]['senha']){
					
				$_SESSION['logado'] = 'sim';
				return 'location: home.php';
			}

		}

		return "location: login.php?erro_login=sim";
	}

	header(verifica_contas());
	
?>