<?php 

	include 'conexao.php';
	function cadastrarUsuario($nomeUsu, $senhaUsu) {
		conectar();
		query("INSERT INTO usuario(nomeUsu, senhaUsu) VALUES ('$nomeUsu', '$senhaUsu')");
		fechar();
	}
	
	function buscarUsuario($nomeUsu) {
		conectar();
		$resultado = query("SELECT * FROM usuario WHERE nomeUsu = '$nomeUsu' ");
		fechar();
		return $resultado;
	}

?>