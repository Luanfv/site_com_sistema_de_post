<?php

	session_start();
	include ('funcoes.php'); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">
	<title>

	</title>
</head>
<body>

	<?php 
	
		include('menu.php');
		include('home_conteudo.php');
		include('rodape.php');

	?>

</body>
</html>