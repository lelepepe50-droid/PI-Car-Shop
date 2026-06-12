<?php
$id_carro = $_GET['id_carro'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$quilometragem = $_POST['quilometragem'];
$placa = $_POST['placa'];
$foto = $_POST['foto'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
 
include "inc-conexao.php";
$sql = "update tb_cliente set id_carro='{$id_carro}', nome='{$nome}', cpf={$cpf}, email='{$email}', telefone='{$telefone}', senha='{$senha}' where id_cliente={$id_cliente}";
$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
header('Location:veiculos-listagem.php');
?>