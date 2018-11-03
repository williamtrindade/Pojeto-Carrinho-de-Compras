<?php 
	include 'conexao.php';
	function cadastrarUsuario($nome, $senha){
		conectar();
		query("INSERT INTO usuario(nome, senha) VALUES ('$nome', '$senha')");
		fechar();
	}
	function buscarUsuario($nome){
		conectar();
		$resultado = query("SELECT * FROM usuario WHERE nome = '$nome' ");
		fechar();
		return $resultado;
	}
?>