<h1>Listar Nutricional</h1>
<div class="row search-bar">
	<div class="col-lg-12">
		<form class="row g-2 float-end" action="?page=listar-nutricional" method="POST">
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
		$sql = "SELECT * FROM nutricional AS n
		INNER JOIN produto AS p
		ON p.id_produto = n.produto_id_produto";
	}else{
		$sql = "SELECT * FROM nutricional AS n
		INNER JOIN produto AS p
		ON p.id_produto = n.produto_id_produto 
		WHERE nome_produto LIKE '%".$_REQUEST["pesquisa"]."%' ";
	}	

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered table-responsiveness'>";
		print "<tr>";
		print "<th>Nome do Produto</th>";
		print "<th>Nome do Nutriente</th>";
		print "<th>Valor Nutricional</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_produto."</td>";
			print "<td>".$row->nome_nutricional."</td>";
			print "<td>".$row->valor_nutricional."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=editar-nutricional&id_nutricional=".$row->id_nutricional."';\"><i class=\"fas fa-edit\"></i></button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-nutricional&acao=excluir&id_nutricional=".$row->id_nutricional."';}else{false;}\"><i class=\"fas fa-trash\"></i></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultado.</div>";
	}
?>