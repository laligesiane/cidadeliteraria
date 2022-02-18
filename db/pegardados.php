<?php 

include('conexao.php');

$sql = "SELECT * FROM usuario WHERE user_id = $user_id";
$mostaruser = $conexao->query($sql);

?>