<?php 
	
	include '../model/crudVenda.php';

	$opcao = $_GET['opcao'];
	
	if($opcao == 'tirarSelecao') {
		$codigoUsuLogado = $_GET['codigoUsuLogado'];
		$codigoPro = $_GET['codigoPro'];
		excluirVenda($codigoUsuLogado, $codigoPro);
		header("Location: ../view/carrinhodecompras");
	}elseif($opcao == 'selecionar') {
		$codigoPro = $_GET['codigoPro']; 
		$codigoUsuLogado = $_GET['codigoUsuLogado']; ;
		inserirVenda($codigoUsuLogado, $codigoPro);
		header("Location: ../view/visualizarprodutos");
	}

?>