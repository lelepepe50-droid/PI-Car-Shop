<?php
include "inc-conexao.php";

$nome = mysqli_real_escape_string($conexao, $_POST['nome'] ?? '');
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf'] ?? '');
$email = mysqli_real_escape_string($conexao, $_POST['email'] ?? '');
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone'] ?? '');
$senha = mysqli_real_escape_string($conexao, $_POST['senha'] ?? '');
$nome_da_loja = mysqli_real_escape_string($conexao, $_POST['nome_da_loja'] ?? '');
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco'] ?? '');

$pasta_uploads = "uploads/";
if (!is_dir($pasta_uploads)) {
    mkdir($pasta_uploads, 0775, true);
}

$foto_vendedor_caminho = "";
if (isset($_FILES['foto_vendedor']) && $_FILES['foto_vendedor']['error'] == 0) {
    $extensao = pathinfo($_FILES['foto_vendedor']['name'], PATHINFO_EXTENSION);
    $novo_nome = "vendedor_" . uniqid() . "." . $extensao;
    if (move_uploaded_file($_FILES['foto_vendedor']['tmp_name'], $pasta_uploads . $novo_nome)) {
        $foto_vendedor_caminho = $pasta_uploads . $novo_nome;
    }
}

$foto_loja_caminho = "";
if (isset($_FILES['foto_da_loja']) && $_FILES['foto_da_loja']['error'] == 0) {
    $extensao_loja = pathinfo($_FILES['foto_da_loja']['name'], PATHINFO_EXTENSION);
    $novo_nome_loja = "loja_" . uniqid() . "." . $extensao_loja;
    if (move_uploaded_file($_FILES['foto_da_loja']['tmp_name'], $pasta_uploads . $novo_nome_loja)) {
        $foto_loja_caminho = $pasta_uploads . $novo_nome_loja;
    }
}

$foto_vendedor_caminho = mysqli_real_escape_string($conexao, $foto_vendedor_caminho);
$foto_loja_caminho = mysqli_real_escape_string($conexao, $foto_loja_caminho);

$sql = "insert into tb_vendedor (nome, cpf, email, telefone, senha, foto, nome_da_loja, endereco, foto_da_loja)
        values ('{$nome}', '{$cpf}', '{$email}', '{$telefone}', '{$senha}', '{$foto_vendedor_caminho}', '{$nome_da_loja}', '{$endereco}', '{$foto_loja_caminho}')";

$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

if ($resultado) {
    header('location:vendedor-listagem.php?sucesso=1');
} else {
    header('location:vendedor-cadastrar.php?erro=1');
}
exit;
?>
