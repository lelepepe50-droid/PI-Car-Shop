<?php
// Captura o ID do carro vindo da URL
$id_carro = $_GET['id_carro'];

 
include "inc-conexao.php";
 
// Define a query usando as tabelas e colunas de veículos
$sql = "delete from tb_carro where id_carro = {$id_carro}";
 
// Executa a query no banco de dados
$resultado = mysqli_query($conexao, $sql);
 
// Fecha a conexão
mysqli_close($conexao);
 
include "inc-conexao.php";

// Define a query usando as tabelas e colunas de veículos
$sql = "delete from tb_carro where id_carro = {$id_carro}";

// Executa a query no banco de dados
$resultado = mysqli_query($conexao, $sql);

// Fecha a conexão
mysqli_close($conexao);


// Redireciona de volta para a listagem de veículos
header('location:veiculos-listagem.php');
?>