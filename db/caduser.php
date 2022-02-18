<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit_caduser'])){
    
    include('conexao.php');
    $nome = filter_input(INPUT_POST, 'nome_cad', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email_cad', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha_cad');
    $senha = password_hash($senha, PASSWORD_BCRYPT);


    $sql = "INSERT INTO usuario(user_nome, user_email, user_senha)  VALUES ('$nome', '$email', '$senha')";
    $conexao->query($sql);
    header ('Location: ../menu/menu.php');
    exit();
};