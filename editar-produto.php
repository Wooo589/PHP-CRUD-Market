<h1>Editar Produto</h1>
<?php
	$sql = "SELECT * FROM produto WHERE id_produto=".$_REQUEST["id_produto"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=salvar-produto" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_produto" value="<?php print $row->id_produto; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_produto" value="<?php print $row->nome_produto; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="text" name="peso_liquido" value="<?php print $row->peso_liquido; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="validade" value="<?php print $row->validade; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="text" name="lote" value="<?php print $row->lote; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
	</div>
</form>