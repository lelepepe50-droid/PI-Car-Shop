<?php 
$titulo_da_pagina = "Listagem de veiculos";
include "inc-cabecalho.php";
include "inc-menu.php"; // Adicionado ponto e vírgula que faltava
?>

<body class="d-flex flex-column min-vh-100">
    <main class="container pt-3 mb-2">
        <h1>listagem de veiculos</h1>
        <div class="row">
         <div class="col">
            <!-- Corrigido o link que estava incompleto e sem fechar a tag <a> -->
            <a href="veiculos-cadastrar.php" class="btn btn-primary mb-3">Cadastrar Novo veiculo</a>
         </div>   
        </div>

        <div class="row">
        <div class="col">
        <table class="table table-success table-striped">
            <tr>
            <th>id_carro</th>
            <th>marca</th>
            <th>modelo</th>
            <th>ano</th>
            <th>quilometragem</th>
            <th>placa</th>
            <th>cor</th>
            <th>preco</th>
            <th>status</th>
            <th scope="col">Ações</th>
            </tr>
            <?php
            #abrir conexão
            include "inc-conexao.php";
            
            #consultar os dados (Corrigido erro de digitação no comentário)
            $sql = "select * from tb_carro order by id_carro, marca, modelo, ano, quilometragem, placa, foto, cor, preco, status";
            $resultado = mysqli_query($conexao, $sql);

            #listagem de clientes
            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td> {$linha_resultado['id_carro']} </td>";
                echo "<td> {$linha_resultado['marca']} </td>";
                echo "<td> {$linha_resultado['modelo']} </td>";
                echo "<td> {$linha_resultado['ano']} </td>";
                echo "<td> {$linha_resultado['quilometragem']} </td>";
                echo "<td> {$linha_resultado['placa']} </td>";
                echo "<td> {$linha_resultado['cor']} </td>";
                echo "<td> {$linha_resultado['preco']} </td>";
                echo "<td> {$linha_resultado['status']} </td>";

                // Agrupando as ações na mesma coluna <td> para organizar a tabela
                echo "<td>";
                echo " <a href='veiculos-atualizar.php?id_carro={$linha_resultado['id_carro']}' class='btn btn-sm btn-warning'>Atualizar</a> ";
                echo " <a href='veiculos-excluir.php?id={$linha_resultado['id_carro']}' class='btn btn-sm btn-danger'>Excluir</a> ";
                echo "</td>";
                echo "</tr>";
            }
            #fechar conexão
            mysqli_close($conexao); // Adicionado ponto e vírgula que faltava
            ?>
                </table>
            </div>    
        </div>
    </main>
    <?php include "inc-footer.php"?>
</body>