<?php
$titulo_da_pagina="cliente Visualizar";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id_cliente = $_GET['id_cliente'];

$sql = "select * from tb_cliente where id_cliente = $id_cliente";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = "";
while($linha = mysqli_fetch_asooc($resultado)){
$nome = $linha('nome');
$cpf = $linha('cpf');
$email = $linha('email'); 
$telefone = $linha('telefone');
$senha = $linha('senha');         
}
?>
<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>cliente Visualizar</h1>
        <div class="letras-cor">
          <img src="<?=$nome; ?>" alt="<?=$telefone; ?>" class= "capa-cliente" > <br>
        nome:    <?=$nome; ?> <br>
        telefone:   <?=$telefone; ?> <br>
    </div>
        </div>
</main>