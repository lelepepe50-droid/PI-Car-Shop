<?php
$id_vendedor = $_GET['id_vendedor'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
 
include "inc-conexao.php";
$sql = "update tb_cliente set id_vendedor='{$id_vendedor}', nome='{$nome}', cpf={$cpf}, email='{$email}', telefone='{$telefone}', senha='{$senha}' where id_cliente={$id_cliente}";
$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
header('Location:vendedor-listagem.php');
?>