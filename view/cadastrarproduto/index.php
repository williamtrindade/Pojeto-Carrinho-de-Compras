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
    <title>iShop - Funcionário - Cadastrar Produtos</title>
</head>
<body>
    <header>
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="index.php">
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
                                <a href="../cadastrarproduto" class="button is-primary"><strong>Cadastrar</strong></a>
                                <a href="../visualizarprodutoscadastrados" class="button is-dark"><strong>Visualizar</strong></a>
                                <p class="button is-dark">
                                    Funcionário: <?php echo $_SESSION['nomeFuncionario']; ?>
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
                <h3 class="title is-3" style="margin-top: 2%;">Cadastrar Produtos</h3>
                <form action="../../controller/controleProduto.php" method="POST">
                    <div class="field">
                        <label class="label" for="nome">Nome</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Digite o nome do Produto" name="nomePro" id="nome">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="descricao">Descrição</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Digite uma descrição para o produto" name="descricaoPro" id="descricao">
                      </div>
                    </div>

                    <div class="field">
                        <label class="label" for="preco">Preço</label>
                        <div class="control">
                            <input class="input" type="text" name="precoPro" id="preco" placeholder="R$">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-success" name="opcao" value="Cadastrar Produto" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/jquery.mask.min.js"></script>
    <script src="../../assets/js/index.js"></script>
    <script src="../../assets/js/mascara.js"></script>
</body>
</html>