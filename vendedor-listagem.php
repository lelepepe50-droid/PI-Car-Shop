<?php 
$titulo_da_pagina = "Listagem de vendedor";
include "inc-cabecalho.php";
include "inc-menu.php"; // Adicionado ponto e vírgula que faltava
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">
    <main class="container pt-3 mb-2">
        <h1>listagem de vendedor</h1>
        <div class="row">
         <div class="col">
            <!-- Corrigido o link que estava incompleto e sem fechar a tag <a> -->
            <a href="vendedor-cadastrar.php" class="btn btn-primary mb-3">Cadastrar Novo vendedor</a>
         </div>   
        </div>

        <div class="row">
        <div class="col">
        <table class="table table-success table-striped">
            <tr>
            <th>id_vendedor</th>
            <th>nome</th>
            <th>telefone</th>
            <th scope="col">Ações</th>
            </tr>
            <?php
            #abrir conexão
            include "inc-conexao.php";
            
            $sql = "select * from tb_cliente order by id_cliente, nome, cpf, email, telefone, senha";
            $resultado = mysqli_query($conexao, $sql);

            #listagem de clientes
            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td> {$linha_resultado['id_cliente']} </td>";
                echo "<td> {$linha_resultado['nome']} </td>";
                echo "<td> {$linha_resultado['telefone']} </td>";
                echo "<td>";
                echo " <a href='cliente-atualizar.php?id_cliente={$linha_resultado['id_cliente']}' class='btn btn-sm btn-warning'>Atualizar</a> ";
                echo " <a href='cliente-excluir.php?id={$linha_resultado['id_cliente']}' class='btn btn-sm btn-danger'>Excluir</a> ";
                echo "</td>";
                echo "</tr>";
            }
            #fechar conexão
            mysqli_close($conexao);
            ?>
                </table>
            </div>    
        </div>
    </main>
    <?php include "inc-footer.php"?>
</body>
