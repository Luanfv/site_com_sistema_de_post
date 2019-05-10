<?php
	session_start();
	$_SESSION['logado'] = 'nao';
	header("location: home.php");

?>