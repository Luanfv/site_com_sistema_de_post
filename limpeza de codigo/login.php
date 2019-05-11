<?php 
	session_start();

	if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'sim')
		header('location: cadastrar.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css\login.css">
	<title>
		Login
	</title>
</head>
<body>

	<a id="link" href="home.php">Voltar</a>

	<div id="principal">

		<div>

			<form action="verifica_conta.php" method="POST">
				<table id="tabela">

					<tr>
						<td>
							<div id="conect">
								Conecte-se
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<input class="login" type="text" name="login" placeholder="Digite seu login">
						</td>
					</tr>

					<tr>
						<td>
							<input class="login" type="password" name="senha" placeholder="Digite sua senha">
						</td>
					</tr>

					<tr>
						<td id="erro">
							<?php
								if(isset($_REQUEST['erro_login']) && $_REQUEST['erro_login'] = 'sim'){
									echo "Login e/ou senha incorreta";
								}
							?>
						</td>
					</tr>

					<tr>
						<td>
							<input id="botao" type="submit" value="Entrar">
						</td>
					</tr>
				</table>
				

			</form>
		</div>


	</div>


</body>
</html>