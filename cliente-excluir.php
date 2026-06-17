<?php

$id_cliente = $_GET['id_cliente'];

include "inc-conexao.php";

$sql = "delete from tb_cliente where id_cliente = {$id_cliente}";
$id_cliente= $_GET['c'];

include "inc-conexao.php";

$sql = "delete from tb_cliente where id = ($tb_cliente)";
>>>>>>> Stashed changes

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:cliente-listagem.php');
?>