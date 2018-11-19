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

    $codigoUsuLogado = $_SESSION['codigoUsu'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/bulma.min.css" />
    <link rel="stylesheet" href="../../assets/css/index.css">
    <title>iShop - Cliente - Visualizar Produtos</title>
</head>
<body>
    <header>
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="login.php">
                        <p class="logo"><strong>iShop</strong></p>
                    </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a href="../visualizarprodutos" class="button is-primary"><strong>Produtos</strong></a>
                                <a href="../carrinhodecompras" class="button is-dark"><strong>Carrinho</strong></a>
                                <p class="button is-dark">
                                    Cliente: <?php echo $_SESSION['nomeCliente']; ?>
                                </p>
                                <a class="button is-danger" href="../../controller/controleUsuario.php?opcao=Sair">
                                    Sair
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="columns">
            <div class="column container">
                <h3 class="title is-3" style="margin-top: 2%;">Produtos</h3>
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../../model/crudVenda.php';
                            $resultado = mostrarProdutos();
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)) {
                                    $codigoPro = $linha['codigoPro'];
                                    $nomePro = $linha['nomePro'];
                                    $descricaoPro = $linha['descricaoPro'];
                                    $precoPro = $linha['precoPro'];
                                    $codigoUsuLogado = $_SESSION['codigoUsu'];
                                    echo "
                                        <tr>
                                            <td>$nomePro</td>
                                            <td>$descricaoPro</td>
                                            <td>$precoPro</td>                                            
                                            <td>
                                                <a class='button is-primary' href='../../controller/controleVenda.php?opcao=selecionar&codigoPro=$codigoPro&codigoUsuLogado=$codigoUsuLogado'>Selecionar</a>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/index.js"></script>
</body>
</html>