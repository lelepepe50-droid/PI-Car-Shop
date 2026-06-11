<?php
include "inc-conexao.php";
 
// Capturar os dados
$id_cliente = $_GET['id_cliente'] ?? null;
$nome = $_POST['nome'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$senha = $_POST['senha'] ?? '';
 
// Montar a query usando '?' como marcadores (Prepared Statement)
$sql = "UPDATE tb_cliente SET nome=?, cpf=?, email=?, telefone=?, senha=? WHERE id_cliente=?";
 
// Preparar a declaração
$stmt = mysqli_prepare($conexao, $sql);
 
if ($stmt) {
    // "sssssi" significa: 5 strings (s) e 1 inteiro (i)
    mysqli_stmt_bind_param($stmt, "sssssi", $nome, $cpf, $email, $telefone, $senha, $id_cliente);
    // Executar a declaração
    mysqli_stmt_execute($stmt);
    // Fechar a declaração
    mysqli_stmt_close($stmt);
}
 
mysqli_close($conexao);
 
// Redirecionar
header('Location: cliente_listagem.php');
exit;
?>