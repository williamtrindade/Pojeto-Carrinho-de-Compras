<?php 

	include 'conexao.php';
	$codigoUsuLogado = $_SESSION['codigoUsu'];
	function mostrarProdutosSelecionados() {
		global $codigoUsuLogado;
		conectar();
		$resultado = query("
			SELECT * FROM produto, venda WHERE venda.codigoUsu = $codigoUsuLogado AND venda.codigoPro = produto.codigoPro
		");
		fechar();
		return $resultado;
	}

	function excluirVenda($codigoUsuLogado, $codigoPro) { 
		conectar(); 
		query("DELETE FROM venda WHERE codigoUsu = $codigoUsuLogado AND codigoPro = $codigoPro"); 
		fechar();
	}

	function mostrarProdutos() {
		global $codigoUsuLogado;
		conectar();
		$resultado = query("
			SELECT * FROM produto WHERE codigoPro NOT IN (SELECT produto.codigoPro FROM produto, venda WHERE venda.codigoUsu = $codigoUsuLogado AND venda.codigoPro = produto.codigoPro)
		"); 
		fechar();
		return $resultado; 
	}

	function inserirVenda($codigoUsu, $codigoPro) {
		conectar();
		query("INSERT INTO venda (codigoUsu, codigoPro) VALUES ($codigoUsu, $codigoPro)");
		fechar();
	}

?>