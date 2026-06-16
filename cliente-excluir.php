<?php
$id_cliente = $_GET['id_cliente'];

include "inc-conexao.php";

$sql = "delete from tb_cliente where id = {$id_cliente}";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:cliente-listagem.php');
?>