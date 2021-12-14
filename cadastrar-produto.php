<h1>Cadastrar Produto</h1>
<form action="?page=salvar-produto" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Produto</label>
		<input type="text" name="nome_produto" class="form-control">
	</div>
	<div class="mb-3">
		<label>Peso Líquido</label>
		<input type="text" name="peso_liquido" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Validade</label>
		<input type="date" name="validade" class="form-control">
	</div>
	<div class="mb-3">
		<label>Lote</label>
		<input type="text" name="lote" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success"><i class="fas fa-pen"></i></button>
	</div>
</form>