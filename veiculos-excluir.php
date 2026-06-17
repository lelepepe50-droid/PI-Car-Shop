<?php
$id_carro = $_GET['id_carro '];

include "inc-conexao.php";

$sql = "delete from tb_discografia where id_carro = ($id_carro)";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:veiculos-listagem.php');
?>