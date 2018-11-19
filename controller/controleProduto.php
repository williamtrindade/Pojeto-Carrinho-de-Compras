<?php 
	include '../model/crudProduto.php';

	$opcao = $_POST["opcao"];
	if($opcao == "Cadastrar Produto"){
		$nomePro = $_POST["nomePro"];
		$descricaoPro = $_POST["descricaoPro"];
		$precoPro = str_replace(',','.',str_replace('.','',$_POST["precoPro"]));
		cadastrarProduto($nomePro, $descricaoPro, $precoPro);
		header("Location: ../view/cadastrarproduto");
	}
	elseif($opcao == "Editar"){
		$codigoPro = $_POST["codigoPro"];
		$nomePro = $_POST["nomePro"];
		$descricaoPro = $_POST["descricaoPro"];
		$precoPro = str_replace(',','.',str_replace('.','',$_POST["precoPro"]));
		editarProduto($codigoPro, $nomePro, $descricaoPro, $precoPro);
		header("Location: ../view/visualizarprodutoscadastrados");
	}
	elseif($opcao == "Excluir"){
		$codigoPro = $_POST["codigoPro"];
		echo $codigoPro;
		excluirProduto($codigoPro);
		header("Location: ../view/visualizarprodutoscadastrados");
	}
?>