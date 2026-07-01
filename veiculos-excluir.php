<?php
$id_carro = isset($_GET['id_carro']) ? (int) $_GET['id_carro'] : 0;

if ($id_carro > 0) {
    include "inc-conexao.php";
    $sql = "delete from tb_carro where id_carro = {$id_carro}";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}

header('location:veiculos-listagem.php');
exit;
?>
