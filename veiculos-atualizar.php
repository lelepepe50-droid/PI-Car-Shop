<?php
// 1. Recebe o ID do carro pela URL (GET)
$id_carro = $_GET['id_carro'];

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$quilometragem = $_POST['quilometragem'];
$placa = $_POST['placa'];
$foto  = $_POST['foto'];
$cor   = $_POST['cor'];
$preco = $_POST['preco'];
 
include "inc-conexao.php";

// 3. CORREÇÃO: O comando agora atualiza a tabela de carros com as variáveis certas!
$sql = "update tb_carro set 
        marca='{$marca}', 
        modelo='{$modelo}', 
        ano={$ano}, 
        quilometragem='{$quilometragem}', 
        placa='{$placa}', 
        foto='{$foto}', 
        cor='{$cor}', 
        preco='{$preco}' 
        where id_carro={$id_carro}";

$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);

// 4. Redireciona de volta para a lista de veículos
header('Location:veiculos-listagem.php');
?>