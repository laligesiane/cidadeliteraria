<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include("conexao.php");
    $searchApi = filter_input(INPUT_POST, "isbn", FILTER_SANITIZE_SPECIAL_CHARS);
    #$isbn = $_POST['isbn'];
    $user_id = $_SESSION['user_id'];
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q='{$searchApi}'");

    $data = json_decode($page, true);

    if (isset($data)) {
        $info = $data['items'][0]['volumeInfo'];
        $nome = $info['title'];
        $autor = $info['authors'][0];
        $num_pages = $info['pageCount'];
        $descricao = $info['description'];
        $ano_publi = $info['publishedDate'];
        $genero = $info['categories'][0];
    
        $sql = "INSERT INTO livro ( livro_nome, livro_autor, livro_genero, livro_ano, livro_des, livro_num, user_id) VALUES ('$nome', '$autor', '$genero', '$ano_publi', '$descricao', '$num_pages', '$user_id');";
        $conexao->query($sql);
        header ('Location: ../menu/menu.php');
    
        }
?>
