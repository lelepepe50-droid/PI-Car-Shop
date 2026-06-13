<?php
$id_cliente = $_GET['id_cliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
 
include "inc-conexao.php";
$sql = "update tb_discografia set nome='{$nome}', cpf={$cpf}, email='{$email}', telefone='{$telefone}', senha='{$senha}'  where id={$id}";
$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
header('Location:cliente-listagem.php');
?>