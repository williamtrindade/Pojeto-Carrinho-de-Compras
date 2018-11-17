<?php 
	include '../model/crudUsuario.php';

	// se for enviado por POST
	if(isset($_POST["opcao"])) {
		$opcao = $_POST["opcao"];
		// cadastrar usuário
		if($opcao == "Cadastrar Usuário") {
			$nomeUsu = $_POST['nomeUsu'];
			// criptografia sha1
			$senhaUsu = sha1($_POST['senhaUsu']);
			cadastrarUsuario($nomeUsu, $senhaUsu);
			header("Location: ../view/login.php");
		}
		else if($opcao == "Entrar") {
			$nomeUsu = $_POST['nomeUsu'];
			$senhaUsu = sha1($_POST['senhaUsu']);
			$nomeBanco = "null";
			$senhaBanco = "null";
			$resultado = buscarUsuario($nomeUsu);
			while($linha = mysqli_fetch_assoc($resultado)) {
				$nomeBanco = $linha['nomeUsu'];
				$senhaBanco = $linha['senhaUsu'];
			}
			if($nomeUsu == $nomeBanco) {
				if($senhaUsu == $senhaBanco) {
					session_start();
					$_SESSION['nomeUsu'] = $nomeBanco;
					if(isset($_POST['funcionario'])) {
						$_SESSION['nomeFuncionario'] = $nomeBanco;
						header("Location: ../view/visualizarprodutoscadastrados");
					}else {
						$_SESSION['nomeCliente'] = $nomeBanco;
						header("Location: ../view/../view/visualizarprodutos");
					}
					
				}else{
					// modal
					echo "<script> alert('Senha Incorreta!'); </script>";
					echo " <script> window.location = '../view/login.php';</script>";
				}
			}else{
				// modal
				echo "<script> alert('Nome não existe!'); </script>";
				echo " <script> window.location = '../view/login.php';</script>";
			}			
		}
	}
    // se for enviado por GET
	elseif (isset($_GET["opcao"])) {
		$opcao = $_GET["opcao"];
		if ($opcao == "Sair") {
			session_start();
			session_destroy();
			header("Location: ../view/login.php");
		}
	}
?>