<?php
$id_vendedor = $_GET['id_vendedor'];

include "inc-conexao.php";

$sql = "delete from tb_discografia where id_vendedor = ($id_vendedor)";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:vendedor-listagem.php');
?>