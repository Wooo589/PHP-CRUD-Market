<h1>Cadastrar Nutricional</h1>
<form action="?page=salvar-nutricional" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Produto</label>
		<select name="produto_id_produto" class="form-control">
			<option>Selecione o Produto</option>
		<?php
			$sql = "SELECT * FROM produto";
			$res = $conn->query($sql) or die($conn->error);

			if ($res->num_rows > 0) {
				while ($row = $res->fetch_object()) {
					print "<option value='".$row->id_produto."'>";
					print $row->nome_produto."</option>";
				}
			}else{
				print "<option>Não tem produto cadastrado</option>";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome do Nutriente</label>
		<input type="text" name="nome_nutricional" class="form-control">
	</div>
	<div class="mb-3">
		<label>Valor Nutricional</label>
		<input type="text" name="valor_nutricional" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success"><i class="fas fa-pen"></i></button>
	</div>
</form>