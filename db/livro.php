<?php 

include('conexao.php');

$sql = "SELECT * FROM livro";
$stmt = $conexao->query($sql);

?>