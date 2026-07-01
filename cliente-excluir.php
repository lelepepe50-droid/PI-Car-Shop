<?php
$id_cliente = isset($_GET['id_cliente']) ? (int) $_GET['id_cliente'] : 0;

if ($id_cliente > 0) {
    include "inc-conexao.php";
    $sql = "delete from tb_cliente where id_cliente = {$id_cliente}";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}

header('location:cliente-listagem.php');
exit;
?>
