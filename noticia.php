<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/posts.css">
	<title>
		
	</title>
</head>

	<?php
		menu();

	?>main-noticia

	<div id="main-noticia">
		<div class="post">
				<div class="titulo">
					<?php

						echo $lista[0]['titulo'];

					?>
				</div>

				<div class="data">
					
					<?php

						echo 'Data: ' . $lista[0]['data'];

					?>

				</div>

				<div class="imagem-resumo">

					<img class="imagem" src="fotos/<?php 
							
								echo $lista[0]['imagem']; 

							?>">

					<div class="resumo">
						<h2>
							Resumo
						</h2>

						<?php

							echo $lista[0]['resumo'];

						?>

					</div>

					<div class="descricao">
						<h2>
							Texto
						</h2>

						<?php

							echo $lista[0]['texto'];

						?>
					</div>

			</div>
		</div>
		<?php 

		rodape();

		?>

	</body>
</html>