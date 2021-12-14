<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome    = $_POST["nome_produto"];
			$peso   = $_POST["peso_liquido"];
			$validade = $_POST["validade"];
			$lote   = $_POST["lote"];
		

			$sql = "INSERT INTO produto (nome_produto, peso_liquido, validade, lote) VALUES ('{$nome}','{$peso}','{$validade}','{$lote}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}
			break;
		
		case 'editar':
			$nome    = $_POST["nome_produto"];
			$peso   = $_POST["peso_liquido"];
			$validade = $_POST["validade"];
			$lote   = $_POST["lote"];

			$sql = "UPDATE produto SET nome_produto='{$nome}', peso_liquido='{$peso}', validade='{$validade}', lote='{$lote}' WHERE id_produto=".$_POST["id_produto"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}
			break;

		case 'excluir':

			$sql = "DELETE FROM produto WHERE id_produto=".$_REQUEST["id_produto"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}
			break;
	}