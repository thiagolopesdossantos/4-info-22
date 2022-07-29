<?php
include '2_trycatch.php';
$query = "insert into teste (nome, email)values('thiago','thiago@gmail.com')";
$sql = $conexao->prepare($query);
$resultado = $sql->execute();
?>