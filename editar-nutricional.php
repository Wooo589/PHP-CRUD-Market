<h1>Editar Nutricional</h1>
<?php
		$sql_1 = "SELECT * FROM nutricional WHERE id_nutricional=".$_REQUEST["id_nutricional"];

		$res_1 = $conn->query($sql_1) or die($conn->error);

		$row_1 = $res_1->fetch_object();
?>
<form action="?page=salvar-nutricional" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_nutricional" value="<?php print $row_1->id_nutricional; ?>">
	<div class="mb-3">
		<label>Produto</label>
		<select name="produto_id_produto" class="form-control">
			<option>Selecione o Produto</option>
			<?php
				$sql = "SELECT * FROM produto";

				$res = $conn->query($sql) or die($conn->error);

				if($res->num_rows > 0){
					while ($row = $res->fetch_object()) {
						if($row->id_produto == $row_1->produto_id_produto){
							print "<option value='".$row->id_produto."' selected>";
							print $row->nome_produto."</option>";
						}else{
							print "<option value='".$row->id_produto."'>";
							print $row->nome_produto."</option>";
						}
					}
				}else{
					print "<option>Não tem produto cadastrado</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome do Nutriente</label>
		<input type="text" name="nome_nutricional" value="<?php print $row_1->nome_nutricional; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Valor Nutricional</label>
		<input type="text" name="valor_nutricional" value="<?php print $row_1->valor_nutricional; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
	</div>
</form>