<?php 

    session_start();
    if(isset($_SESSION['nomeUsu'])) {
    	if(isset($_SESSION['nomeFuncionario'])) {
    		// quer dizer que é o vendedor
    	}else {
    		// quer dizer que não é o vendedor
    		header("Location: ../visualizarprodutos.php");
    	}
    }else {
        header("Location: ../login.php");
    }

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
    <title>iShop - Funcionário - Visualizar Produtos</title>
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
                                <a href="../cadastrarproduto" class="button is-dark"><strong>Cadastrar</strong></a>
                                <a href="../visualizarprodutoscadastrados" class="button is-primary"><strong>Visualizar</strong></a>
                                <p class="button is-dark">
                                    Funcionário: <?php echo $_SESSION['nomeFuncionario']; ?>
                                </p>
                                <a class="button is-dark" href="../../controller/controleUsuario.php?opcao=Sair">
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
                <h3 class="title is-3" style="margin-top: 2%;">Cadastrar Produtos</h3>
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include '../../model/crudProduto.php';
                            $resultado = mostrarProduto();
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)) {
                                    $codigoPro = $linha['codigoPro'];
                                    $nomePro = $linha['nomePro'];
                                    $descricaoPro = $linha['descricaoPro']; 
                                    echo "
                                        <tr>
                                            <td>$nomePro</td>
                                            <td>$descricaoPro</td>
                                            <td>
                                                <a class='button is-primary' href='../editarproduto?codigo=$codigoPro'>Editar
                                                </a>
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