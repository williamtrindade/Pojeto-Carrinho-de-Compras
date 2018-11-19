<?php

	include 'crudProduto.php';

	$pesquisa = $_POST["palavra"];

	if($pesquisa == "tudo"){
		$resultado = mostrarProduto();
	}else {
		$resultado = mostrarProdutoPesquisar($pesquisa);
	}

	if(mysqli_num_rows($resultado) <=0){
		echo 'Nenhum nome/descrição encontrado';
	}
	else {
		while($linha = mysqli_fetch_assoc($resultado)) {
            $codigoPro = $linha['codigoPro'];
            $nomePro = $linha['nomePro'];
            $descricaoPro = $linha['descricaoPro']; 
            $precoPro = $linha['precoPro'];
            echo "
                <tr>
                    <td>$nomePro</td>
                    <td>$descricaoPro</td>
                    <td>R$ $precoPro</td>
                    <td>
                        <a class='button is-primary' href='../editarproduto?codigo=$codigoPro'>Editar
                        </a>
                    </td>
                </tr>
            ";  
        }
	}
?>