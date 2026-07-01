<?php
include "inc-conexao.php";

$marca = mysqli_real_escape_string($conexao, $_POST['marca'] ?? '');
$modelo = mysqli_real_escape_string($conexao, $_POST['modelo'] ?? '');
$ano = (int) ($_POST['ano'] ?? 0);
$quilometragem = (float) ($_POST['quilometragem'] ?? 0);
$placa = mysqli_real_escape_string($conexao, $_POST['placa'] ?? '');
$foto = mysqli_real_escape_string($conexao, $_POST['foto'] ?? '');
$cor = mysqli_real_escape_string($conexao, $_POST['cor'] ?? '');
$preco = (float) ($_POST['preco'] ?? 0);

$sql = "insert into tb_carro (marca, modelo, ano, quilometragem, placa, foto, cor, preco)
        values ('{$marca}', '{$modelo}', {$ano}, {$quilometragem}, '{$placa}', '{$foto}', '{$cor}', {$preco})";

$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

if ($resultado) {
    header('location:veiculos-listagem.php?sucesso=1');
} else {
    header('location:veiculos-cadastrar.php?erro=1');
}
exit;
?>
