<?php

	session_start();
	include('funcoes.php');

	$banco = conexao();
	$query = "

		SELECT * FROM posts WHERE cdpost = '".$_REQUEST['edite']."'

	";

	$info = $banco->query($query);
	$lista = $info->fetchAll();

	$_SESSION['id'] = $_REQUEST['edite'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">
	<title>
		
	</title>
</head>
<body>

	<?php 
	
		include('menu.php');
		include('editando_formulario.php');
		include('rodape.php');

	?>
	

</body>
</html>