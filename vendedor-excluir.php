<?php
// Captura o ID vindo da URL (garanta que o seu link envie como ?id_cliente=VALOR)
$id_vendedor = $_GET['id_vendedor'];
 
include "inc-conexao.php";
 
// Define a query usando o nome da sua tabela (tb_cliente) e da sua coluna (id_cliente)
$sql = "delete from tb_vendedor where id_vendedor = {$id_vendedor}";
 
// Executa a query no banco de dados
$resultado = mysqli_query($conexao, $sql);
 
// Fecha a conexão
mysqli_close($conexao);
 
// Redireciona para a listagem de clientes
header('location:vendedor-listagem.php');
?>