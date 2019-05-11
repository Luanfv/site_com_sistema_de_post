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
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/posts.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">

	<title>
		
	</title>
</head>
<body>

	<?php

		include('menu.php');
		include('postagens.php');
		include('rodape.php');

	?>

</body>
</html>