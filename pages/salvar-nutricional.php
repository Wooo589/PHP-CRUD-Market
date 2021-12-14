<?php



	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			
			$produto = $_POST["produto_id_produto"];
			$nome = $_POST["nome_nutricional"];
			$valor = $_POST["valor_nutricional"];

			$sql = "INSERT INTO nutricional (produto_id_produto, nome_nutricional, valor_nutricional) 
					VALUES ('{$produto}','{$nome}', '{$valor}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-nutricional';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-nutricional';</script>";
			}
			break;
		
		case 'editar':

			$produto = $_POST["produto_id_produto"];
			$nome = $_POST["nome_nutricional"];
			$valor = $_POST["valor_nutricional"];

			$sql = "UPDATE nutricional SET produto_id_produto={$produto}, nome_nutricional='{$nome}', valor_nutricional='{$valor}'
					WHERE id_nutricional=".$_POST["id_nutricional"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-nutricional';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-nutricional';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM nutricional WHERE id_nutricional=".$_REQUEST["id_nutricional"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-nutricional';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-nutricional';</script>";
			}
			break;
	}