<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<title>
		
	</title>
</head>
<body>
	<div id="menu">
				
				<form action="pesquisa.php" id="pesquisar">
					<input id="pesquisa" type="text" placeholder="Informe um titulo" name="pesquisa">
					<input id="botaoPesquisa" type="submit" value="Pequisar">
				</form>

				<?php

					if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'sim'){
						?>

							<a class="navegacao" href="deslogado.php">SAIR</a>
						<?php
					}

				?>

				<?php

					if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'sim'){
						?>

							<a class="navegacao" href="login.php">POSTAR</a>
						<?php
					} else{
						?>

						<a class="navegacao" href="login.php" >LOGIN</a>

						<?php
					}

				?>

				<a class="navegacao" href="" >SOBRE</a>
				<a class="navegacao" href="postagens.php" >POST'S</a>
				<a class="navegacao" href="home.php" >HOME</a>
			</div>


	<div id="ultimos_posts">
		<div class="recentes">
			<div class="titulo">
				<?php echo $recentes[3]['titulo'] ?>
			</div>


			<img class="imagem" src="fotos/<?php echo $lista[3]['imagem']; ?>">
		</div>

		<div class="recentes">
			<div class="titulo" >
				<?php echo $recentes[2]['titulo'] ?>
			</div>

			<img class="imagem" src="fotos/<?php echo $lista[2]['imagem']; ?>">
		</div>

		<div class="recentes">
			<div class="titulo">
				<?php echo $recentes[1]['titulo'] ?>
			</div>

			<img class="imagem" src="fotos/<?php echo $lista[1]['imagem']; ?>">
		</div>

		<div class="recentes">
			<div class="titulo">
				<?php echo $recentes[0]['titulo'] ?>
			</div>

			<img class="imagem" src="fotos/<?php echo $lista[0]['imagem']; ?>">
		</div>

		
	</div>


	<div id="sobre">
		
		<h1 class="sobre_conteudo">Um pouco sobre nós</h1>

		<p class="sobre_conteudo">
			"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
		</p>

	</div>

	<div id="rodape">
			<div id="msgRodape">
				<div class="conteudoRodape">
					Desenvolvido por: <a href="https://github.com/Luanfv">Luan França Vieira</a>
				</div>

				<div class="conteudoRodape">
					Situação: 
					<?php 

					
						if($_SESSION['logado'] == 'sim'){
							echo "Logado";
						}
						else{
							echo "Deslogado";
						}
					?>
				</div>

			</div>
		</div>


</body>
</html>