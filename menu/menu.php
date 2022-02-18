<?php
session_start();
include('../db/livro.php');

if (!isset($_SESSION['user_id']))
    {
        header("Location: ../login.html");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=devide-width, inicial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Menu principal</title>
    <link rel="icon" href="../midia/book-fill.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="menu.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<body>
    <div class="navbar-fixed">
        <nav class="bg-nav" role="navigation">
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#section0" class=" brown-text active">home</a></li>
                    <li class="tab"><a href="#section1" class=" brown-text">novidades</a></li>
                    <li class="tab"><a href="../cadlivro.php" class="brown-text">publicar um livro</a></li>
                    <li class="tab"><a href="../perfil.php" class="brown-text">meu perfil</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <section id="section0">
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center title-text">Cidade Literária</h1>
                <div class="row center">
                    <a href="#section1" id="explore" class="btn-large waves-effect waves-brown bt-text">Explorar
                        livros!</a>
                </div>
                <br><br>
            </div>
        </div>
    </section>

    <section id="section1">
            <table>
        <thead>
            <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Número de páginas</th>
            <th>Ano da edição</th>
            <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
            <td><?php echo htmlspecialchars($row['livro_nome']); ?></td>
            <td><?php echo htmlspecialchars($row['livro_autor']); ?></td>
            <td><?php echo htmlspecialchars($row['livro_genero']); ?></td>
            <td><?php echo htmlspecialchars($row['livro_num']); ?> páginas</td>
            <td><?php echo htmlspecialchars($row['livro_ano']); ?></td>
            <td><?php echo htmlspecialchars($row['livro_des']); ?></td>
            <td><a href="../check.html" name="pegar">pegar emprestado</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        </table>
    </section>

    <section id="section2">
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 id="tudo" class="header center title-text">Parece que isso é tudo por agora :/</h1>
                <p id="nao" class="center">Mas não se preocupe! Em breve novos livros serão publicados!</p>
                <div class="row center">
                    <a href="#section0" id="inicio" class="btn-large waves-effect waves-brown bt-text">Voltar ao
                        início</a>
                </div>
                <br><br>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="js/init.js"></script>

    <script>
        $(document).ready(function () {
            $('.modal-trigger').leanModal();
        });
    </script>
</body>

</html>