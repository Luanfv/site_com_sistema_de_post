<div class="espacamento">
		
</div>

<main id="main">

	<?php
		$lista = retorna_pesquisa();
	
		for($i = count($lista) - 1; $i >= 0;$i--){
	?>

	<table class="post">
		<tr>
			<td colspan="2" class="postTitulo">
				<h1>
					<a href="noticia.php?postagem=<?php echo $lista[$i]['cdpost'] ?>"><?php echo $lista[$i]['titulo']; ?></a>
				</h1>
			</td>
		</tr>

		<tr>
			<td colspan="2" class="postData">
				<?php

					echo 'Data: ' . $lista[$i]['data'];

				?>
			</td>
		</tr>

		<tr>
			<td class="postResumo">
				<h2>Resumo</h2>
				<p>
					<?php

						echo $lista[$i]['resumo'];

					?>
				</p>
			</td>

			<td class="postImagem">

				<img class="postImg" src="fotos/<?php 
							
					echo $lista[$i]['imagem']; 

				?>">

			</td>
		</tr>
	</table>

	<hr>

	<div class="pequenoEspaco">
		
	</div>

	<?php } ?>

</main>