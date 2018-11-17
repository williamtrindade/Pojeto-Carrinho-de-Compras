<?php 

    session_start();
    if(isset($_SESSION['nomeUsu'])) {
    	if(isset($_SESSION['nomeCliente'])) {
    		// quer dizer que é o cliente
    	}else {
    		// quer dizer que não é o cliente
    		header("Location: ../visualizarprodutoscadastrados.php");
    	}
    }else {
        header("Location: ../login.php");
    }

?>