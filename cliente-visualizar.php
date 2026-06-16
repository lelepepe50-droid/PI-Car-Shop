<?php
$titulo_da_pagina = "Cliente Visualizar";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id_cliente = $_GET['id_cliente'];

$sql = "select * from tb_cliente where id_cliente = $id_cliente";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $nome     = $linha['nome'];
    $cpf      = $linha['cpf'];
    $email    = $linha['email']; 
    $telefone = $linha['telefone'];
    $senha    = $linha['senha'];         
}
?>
<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>Cliente Visualizar</h1>
        <div class="letras-cor">
            <p><strong>Nome:</strong> <?=$nome; ?></p>
            <p><strong>Telefone:</strong> <?=$telefone; ?></p>
            <p><strong>E-mail:</strong> <?=$email; ?></p>
        </div>
    </main>
<?php 
mysqli_close($conexao);
include "inc-rodape.php";
?>
</body>