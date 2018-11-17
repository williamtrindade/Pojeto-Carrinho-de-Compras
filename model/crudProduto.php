<?php

	include 'conexao.php';
	function cadastrarProduto($nomePro, $descricaoPro){
		conectar();
		query("INSERT INTO veiculo(nomePro, descricaoPro) VALUES ('$nomePro','$descricaoPro')");
		fechar();
	}

	function mostrarProduto(){
		conectar();
		$resultado = query("SELECT * FROM produto");
		fechar();
		return $resultado;
	}

?>