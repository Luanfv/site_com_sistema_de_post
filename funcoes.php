<?php 
	

	function menu(){
		?>
		<body>

			<div id="menu">
				
				<form action="pesquisa.php" id="pesquisar">
					<input id="pesquisa" type="text" placeholder="Informe um titulo" name="pesquisa">
					<input id="botaoPesquisa" type="submit" value="Pequisar">
				</form>

				<?php

					if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'sim')
				?>

							<a class="navegacao" href="deslogado.php">SAIR</a>

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
		<?php 
	}

	function mostrar_posts(){
		
		$banco = conexao();

		$query = "

			SELECT * FROM posts

		";

		$info = $banco->query($query);
		$lista = $info->fetchAll();


		?>

		<div id="main">

		<?php
		for($i = count($lista) - 1; $i >= 0;$i--){

		?>

			<div class="post">
				<div class="titulo">

					<a href="zoom_noticia.php?postagem=<?php echo $lista[$i]['cdpost']; ?>"><?php

						echo $lista[$i]['titulo'];

					?></a>
				</div>

				<div class="data">
					
					<?php

						echo 'Data: ' . $lista[$i]['data'];

					?>

				</div>

				<div class="imagem-resumo">

					<img class="imagem" src="fotos/<?php 
							
								echo $lista[$i]['imagem']; 

							?>">

					<div class="resumo">
						<h3>
							Resumo
						</h3>

						<?php

							echo $lista[$i]['resumo'];

						?>

				</div>

			</div>

		</div>

		<?php 
		}

		
	}

	function rodape(){
	?>

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

	<?php
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

	function conexao(){
		$host = 'mysql:host=localhost;dbname=postagens';
		$nome = 'root';
		$senha = '';

		$banco = new PDO($host, $nome, $senha);
		return $banco;
	}

?>