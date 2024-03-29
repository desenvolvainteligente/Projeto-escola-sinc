<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Escola Sincronizada</title>

        <meta charset="utf-8">
        <meta content="author" name="Thiago S. Viana">
        <meta content="keyword" name="Escola, Escola Sincronizada">
        <meta content="viewport" name="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../css/style.css">

        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <!-- Aqui vai ficar o cabeçalho do nosso sistema e tudo pertinente ao titulo do projeto -->
        </header>
        <nav id="menu">
            <!-- Aqui vai ficar o menu de navegação do sistema -->
            <ul>
                <li><a href="http://localhost/projeto-escola-sinc/home">home</a></li>
                <li><a href="http://localhost/projeto-escola-sinc/sobre">Sobre</a></li>
                <li><a href="http://localhost/projeto-escola-sinc/contato">contato</a></li>
            </ul>
        </nav>
        <section>
            <?php require_once 'controller/router.php'; ?>
            <!-- Aqui vai ficar todo o conteúdo do sistema -->
        </section>
        <aside>
            <!-- Aqui vai ficar a barra lateral, com algumas informações pertinentes as áreas do sistema -->
        </aside>
        <footer>
            <!-- Aqui vai ser o rodapé do sistema -->
        </footer>
    </body>
</html>