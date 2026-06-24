<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$senha = $_POST['senha'];
$nome_da_loja = $_POST['nome da loja'];
$endereco = $_POST['endereco'];
$foto = $_POST['foto'];

$conexao = mysqli_connect("localhost", "root", "", "db_carros_projeto_integrador");
if(!$conexao){
    echo "erro";
    die("<h3>Erro</h3>" . mysqli_connect_error());
}

// Correção: tb_vendedor e VALUES
$sql = "INSERT INTO tb_vendedor(nome, cpf, email, telefone, senha) VALUES ('$nome', '$cpf', '$email', '$telefone', '$senha', '$nome_da_loja', '$endereco', '$foto')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}

// Correção: mysqli_close com "i"
mysqli_close($conexao);
header('location:vendedor-cadastrar.php');
?>