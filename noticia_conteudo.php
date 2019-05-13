<div class="espacamentoPost">
		
</div>

<main id="main">
	<?php

		if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'sim'){
			
	?>

	<a class="delete-edite" href="deletar.php?delete=<?php echo $lista[0]['cdpost']; ?>">Deletar</a>
	<a class="delete-edite" href="formulario_editar.php?edite=<?php echo $lista[0]['cdpost']; ?>">Editar</a>	

	<?php
	
		}		

	?>

	<table class="post">
		<tr>
			<td colspan="2" class="postTitulo">
				<h1>
					<?php

						echo $lista[0]['titulo'];

					?>
				</h1>
			</td>
		</tr>

		<tr>
			<td colspan="2" class="postData">
				<?php

					echo $lista[0]['data'];

				?>
			</td>
		</tr>

		<tr>
			<td class="postResumo">
				<h2>Resumo</h2>

				<p>
					<?php

						echo $lista[0]['resumo'];

					?>
				</p>
			</td>

			<td class="postImagem">
				<img class="postImg" src="fotos/<?php echo $lista[0]['imagem']; ?>">
			</td>
		</tr>

		<tr>
			<td>
				<br>
			</td>
		</tr>

		<tr>
			<td colspan="2" class="postTexto">
				<h2>Texto</h2>

				<p>
					<?php

						echo $lista[0]['texto'];

					?>
				</p>
			</td>
		</tr>
	</table>
		
</main>