<?php
$titulo_da_pagina = "cliente cadastrar";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id = $_GET['id_cliente'];
 
$sql = "select * from tb_discografia where id = $id_cliente";
$resultado = mysqli_query($conexao, $sql);
 
$foto = $nome = $cpf = $email = $telefone = $senha = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $$cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $senha = $linha['senha'];
}
?>
<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>Visualizar cliente </h1>
    <div class= "letra-cor">
       <img src="<?=$nome; ?>" alt="<?=$cpf; ?>" class= "cliente tabela"> <br>
        nome:    <?=$nome; ?> <br>
        cpf:   <?=$cpf; ?> <br>
        email: <?=$email; ?>    <br>
        telefone:   <?=$telefone; ?> <br>
        senha:   <?=$senha; ?> <br>
    </div>
    </main>
 
    <?php include "inc-rodape.php"?>
</body>
 
 