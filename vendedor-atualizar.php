<?php
$id_vendedor = isset($_GET['id_vendedor']) ? (int) $_GET['id_vendedor'] : 0;

if ($id_vendedor <= 0) {
    header('Location: vendedor-listagem.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: vendedor-editar.php?id_vendedor=' . $id_vendedor);
    exit;
}

include "inc-conexao.php";

$nome = mysqli_real_escape_string($conexao, $_POST['nome'] ?? '');
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf'] ?? '');
$email = mysqli_real_escape_string($conexao, $_POST['email'] ?? '');
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone'] ?? '');
$senha = mysqli_real_escape_string($conexao, $_POST['senha'] ?? '');
$nome_da_loja = mysqli_real_escape_string($conexao, $_POST['nome_da_loja'] ?? '');
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco'] ?? '');

$sql = "update tb_vendedor set
        nome = '{$nome}',
        cpf = '{$cpf}',
        email = '{$email}',
        telefone = '{$telefone}',
        senha = '{$senha}',
        nome_da_loja = '{$nome_da_loja}',
        endereco = '{$endereco}'
        where id_vendedor = {$id_vendedor}";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('Location: vendedor-listagem.php');
exit;
?>
