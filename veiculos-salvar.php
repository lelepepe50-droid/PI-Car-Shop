<?php
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$quilometragem = $_POST['quilometragem'];
$placa = $_POST['placa'];
$foto = $_POST['foto'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];

$conexao = mysqli_connect("localhost", "root", "", "db_carros_projeto_integrador");
if(!$conexao){
    echo "erro";
    die("<h3>Erro</h3>" . mysqli_connect_error());
}

// Correção: tb_carro e VALUES
$sql = "INSERT INTO tb_carro (marca, modelo, ano, quilometragem,
placa, foto, cor, preco) VALUES ('$marca', '$modelo', '$ano', '$quilometragem', '$placa', '$foto', '$cor', '$preco')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}

// Correção: mysqli_close com "i"
mysqli_close($conexao);
header('location:veiculos-cadastrar.php');
?>
