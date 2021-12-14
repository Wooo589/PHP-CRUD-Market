<h1>Listar Produto</h1>
<div class="row search-bar">
	<div class="col-lg-12">
		<form class="row g-2 float-end" action="?page=listar-produto" method="POST">
			<div class="col-auto">
				<input type="text" name="pesquisa" placeholder="Busque o que procura" class="
				form-control">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-success">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</form>
	</div>
</div>
<?php

	if(empty($_REQUEST["pesquisa"])){
		$sql = "SELECT * FROM produto";
	}else{
		$sql = "SELECT * FROM produto WHERE nome_produto LIKE '%".$_REQUEST["pesquisa"]."%' ";
	}	

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered table-responsiveness'>";
		print "<thead>";
		print "<tr>";
		print "<th>Nome do Produto</th>";
		print "<th>Peso Líquido</th>";
		print "<th>Data de Validade</th>";
		print "<th>Lote</th>";
		print "<th>Ações</th>";
		print "</tr>";
		print "</thead>";
		while($row = $res->fetch_object()){
			print "<tbody>";
			print "<tr>";
			print "<td>".$row->nome_produto."</td>";
			print "<td>".$row->peso_liquido."</td>";
			print "<td >".$row->validade."</td>";
			print "<td>".$row->lote."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=editar-produto&id_produto=".$row->id_produto."';\"><i class=\"fas fa-edit\"></i></button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-produto&acao=excluir&id_produto=".$row->id_produto."';}else{false;}\"><i class=\"fas fa-trash\"></i></button>
				   </td>";
			print "</tr>";
			print "</tbody>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultado.</div>";
	}
?>