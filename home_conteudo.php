<?php

	$recentes = recentes_posts();

?>



<table id="postsRecentes">

	<tr>
		<th class="edicao" colspan="2">
			<?php
				if(isset($_REQUEST['editar']) && $_REQUEST['editar'] == 'sem-img'){
					echo "Edição no post foi concluida com sucesso, mantendo a mesma imagem";
				} else if(isset($_REQUEST['editar']) && $_REQUEST['editar'] == 'com-img'){
					echo "Edição no post foi concluida com sucesso, trocando de imagem";
				} else if(isset($_REQUEST['editar']) && $_REQUEST['editar'] == 'deletado'){
					echo "Excluição do post foi realizada com sucesso";
				}
			?>
		</th>
	</tr>

	<tr>
		<th colspan="2">
			<h1 id="tituloRecentes">
				Post's recentes
			</h1>
		</th>
	</tr>

	<tr>
		<td class="txtRecentes">
			<a href="noticia.php?postagem=<?php echo $recentes[3]['cdpost'] ?>"><?php echo $recentes[3]['titulo']; ?></a>
		</td>
			
		<td class="txtRecentes">
			<a href="noticia.php?postagem=<?php echo $recentes[2]['cdpost'] ?>"><?php echo $recentes[2]['titulo']; ?></a>
		</td>

	</tr>

	<tr>
		<td class="imgRecentes">
			<img class="imgRecentes" src="fotos/<?php echo $recentes[3]['imagem']; ?>">
		</td>

		<td class="imgRecentes">
			<img class="imgRecentes" src="fotos/<?php echo $recentes[2]['imagem']; ?>">
		</td>
	</tr>

	<tr>
		<td class="txtRecentes">
			<a href="noticia.php?postagem=<?php echo $recentes[1]['cdpost'] ?>"><?php echo $recentes[1]['titulo']; ?></a>
		</td>

		<td class="txtRecentes">
			<a href="noticia.php?postagem=<?php echo $recentes[0]['cdpost'] ?>"><?php echo $recentes[0]['titulo']; ?></a>
		</td>

	</tr>

	<tr>
		<td class="imgRecentes">
			<img class="imgRecentes" src="fotos/<?php echo $recentes[1]['imagem']; ?>">
		</td>

		<td class="imgRecentes">
			<img class="imgRecentes" src="fotos/<?php echo $recentes[0]['imagem']; ?>">
		</td>

	</tr>

</table>

<div id="mainRecentes">
	<h1 id="sobreRecentes">
		Um pouco sobre nós
	</h1>

	<p id="txtSobreRecentes">
		"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
	</p>

</div>