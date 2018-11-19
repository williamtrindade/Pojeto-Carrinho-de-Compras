<?php

	include 'conexao.php';
	
	function cadastrarProduto($nomePro, $descricaoPro, $precoPro) {
		conectar();
		query("INSERT INTO produto(nomePro, descricaoPro, precoPro) VALUES ('$nomePro','$descricaoPro', '$precoPro')");
		fechar();
	}

	function mostrarProduto() {
		conectar();
		$resultado = query("SELECT * FROM produto");
		fechar();
		return $resultado;
	}

	function mostrarProdutoEditar($codigoPro) {
		conectar();
		$resultado = query("SELECT * FROM produto WHERE codigoPro = $codigoPro");
		fechar();
		return $resultado;
	}

	function editarProduto($codigoPro, $nomePro, $descricaoPro, $precoPro) {
		conectar();
		query("UPDATE produto SET nomePro = '$nomePro', descricaoPro = '$descricaoPro', precoPro = '$precoPro' WHERE codigoPro = $codigoPro");
		fechar();
	}

	function excluirProduto($codigoPro) {
		conectar();
		query("DELETE FROM venda WHERE venda.codigoPro = $codigoPro");
		query("DELETE FROM produto WHERE codigoPro = $codigoPro");
		fechar();
	}

	function mostrarProdutoPesquisar($pesquisa){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE nomePro LIKE '%$pesquisa%' OR descricaoPro LIKE '%$pesquisa%'");
		fechar();
		return $resultado;
	}

?>