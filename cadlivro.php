<?php
    if (isset($_SESSION['user_id']))
        {
            header("Location: login.html");
            exit;
    }
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/livro.css">
    <link rel="icon" href="midia/book-fill.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidade Literária</title>
</head>

<body>
    
    <nav class="navbar"></nav>
    
    <div class="container center" id="main-container">
        <div class="forms-container">
            <form class="publish-form" action="db/cadlivrodb.php" method="post" id="edit-form">
                <h2 class="title">Publique seu livro!</h2>
                <p>Digite o isbn do livro (costuma estar na contracapa do livro, junto a um código de barras)</p>
                <div class="input-field">
                    <label for="isbn"></label>
                    <input type="text" value="" placeholder="ISBN" name="isbn" id="isbn">
                </div>

                <input type="submit" value="Publicar" class="btn solid">
            </form>

        </div>
    </div>

    <script type="text/javascript" src="js/jquery-1.8.2.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>