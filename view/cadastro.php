<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/bulma.min.css" />
	<link rel="stylesheet" href="../assets/css/index.css">
    <title>iShop - Cadastro</title>
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
                                <a class="button is-primary">
                                    <strong>Cadastrar</strong>
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
            <div class="my-box-login container column is-4-desktop is-11-mobile is-8-tablet ">
                <h1 class="title">Cadastrar</h1>
                <form action="../controller/controleUsuario.php" method="POST">
                    <div class="field">
                        <label for="usuario" class="label">Usuário</label>
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Digite um nome de usuário" id="usuario" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <label for="senha" class="label">Senha</label>
                        <p class="control has-icons-left">
                            <input class="input" type="password" placeholder="Digite sua senha" id="senha" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button class="button is-success" name="opcao" value="Entrar">Cadastrar</button>
                            <a class="button is-link" href="login.php">Já tenho conta</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../assets/js/all.js"></script>
	<script src="../assets/js/index.js"></script>
</body>
</html>