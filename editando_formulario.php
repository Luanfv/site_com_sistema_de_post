<div id="cadastro">

	<div id="cadastroConteudo">

					<form action="editar.php" method="post" enctype="multipart/form-data">
						<table id="cadastroTabela">

							<tr>
								<th id="cadastre">
								
									EDITE O POST
								
								</th>

							</tr>

							<tr>
								<td class="espacamento">
									
								</td>
							</tr>

							<tr>
								<td class="cadastroTitulo">
									Titulo
								</td>
							</tr>

							<tr>
								<td>
									<input class="informcaoes" type="text" name="titulo" value="<?php echo $lista[0]['titulo']; ?>">
								</td>
							</tr>

							<tr>
								<td class="espacamento">
									
								</td>
							</tr>

							<tr>
								<td class="cadastroTitulo">
									Resumo
								</td>
							</tr>

							<tr>
								<td>
									<textarea class="informcaoes" cols="60" rows="5" name="resumo"><?php echo $lista[0]['resumo']; ?></textarea>
								</td>
							</tr>

							<tr>
								<td class="espacamento">
									
								</td>
							</tr>

							<tr>
								<td class="cadastroTitulo">
									Texto
								</td>
							</tr>

							<tr>
								<td>
									<textarea class="informcaoes" cols="60" rows="20" name="descricao"><?php echo $lista[0]['texto'];  ?></textarea>
								</td>
							</tr>

							<tr>
								<td class="espacamento">
									
								</td>
							</tr>

							<tr>
								<td>
									Imagem: <input type="file" name="imagem">
								</td>
							</tr>


							<tr>
								<td class="espacamento">
									
								</td>
							</tr>

							<tr>
								<td>
									Selecione a posição da imagem;
								</td>
							</tr>

							<tr>
								<td>
									<select name="posicao">
										<option value="right">Direita</option>
										<option value="left">Esquerda</option>
									</select>
								</td>
							</tr>

							<tr>
								<td class="espacamento">
									
								</td>
							</tr>

							<tr>
								<td>
									<input id="btnCadastro" type="submit" value="Editar">
								</td>
							</tr>

						</table>
					</form>

	</div>
</div>

