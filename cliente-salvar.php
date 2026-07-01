<?php
include "inc-conexao.php";

$nome = mysqli_real_escape_string($conexao, $_POST['nome'] ?? '');
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf'] ?? '');
$email = mysqli_real_escape_string($conexao, $_POST['email'] ?? '');
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone'] ?? '');
$senha = mysqli_real_escape_string($conexao, $_POST['senha'] ?? '');

$sql = "insert into tb_cliente (nome, cpf, email, telefone, senha)
        values ('{$nome}', '{$cpf}', '{$email}', '{$telefone}', '{$senha}')";

$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

if ($resultado) {
    header('location:cliente-listagem.php?sucesso=1');
} else {
    header('location:cliente-cadastrar.php?erro=1');
}
exit;
?>
