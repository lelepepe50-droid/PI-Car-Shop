<?php
$id_vendedor = isset($_GET['id_vendedor']) ? (int) $_GET['id_vendedor'] : 0;

if ($id_vendedor > 0) {
    include "inc-conexao.php";
    $sql = "delete from tb_vendedor where id_vendedor = {$id_vendedor}";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}

header('location:vendedor-listagem.php');
exit;
?>
