<?php
// Tenta estabelecer a conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "db_carros_projeto_integrador");

// Verifica se a conexão falhou
if (!$conexao) {
    die("<h3>Erro ao conectar ao banco de dados:</h3>" . mysqli_connect_error());
}
?>