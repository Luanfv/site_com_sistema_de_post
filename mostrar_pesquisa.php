<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/posts.css">
			<title>
				Home
			</title>
		</head>
	<body>
		
		<div id="main">

	<?php 
	
		for ($i = count($lista) - 1; $i >= 0; $i --) { 
			?>

			<div class="post">
				<div class="titulo">

					<a href="teste.php?postagem=1"><?php

						echo $lista[$i]['titulo'];

					?></a>
				</div>

				<div class="data">
					
					<?php

						echo 'Data: ' . $lista[$i]['data'];

					?>

				</div>

				<div>

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

				<div class="descricao">
					<h3>
						Noticia
					</h3>
					
					<?php

						echo $lista[$i]['texto'];

					?>
				</div>

			</div>

		</div>

		<?php 
		}

	?>

