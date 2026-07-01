<?php
$titulo_da_pagina = "Listagem de vendedor";
include "include/inc-cabecalho.php";
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">
    <?php include "include/inc-menu-administrador.php"; ?>

    <main class="container pt-3 mb-2">
        <h1 class="text-white">Listagem de vendedores</h1>
        <div class="row">
            <div class="col">
                <a href="vendedor-cadastrar.php" class="btn btn-primary mb-3">Cadastrar Novo Vendedor</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th scope="col">Acoes</th>
                    </tr>
                    <?php
                    include "inc-conexao.php";

                    $sql = "select * from tb_vendedor order by id_vendedor, nome";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($linha_resultado = mysqli_fetch_assoc($resultado)) {
                        $id_vendedor = (int) $linha_resultado['id_vendedor'];
                        echo "<tr>";
                        echo "<td>{$id_vendedor}</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['nome']) . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['telefone']) . "</td>";
                        echo "<td>";
                        echo " <a href='vendedor-visualizar.php?id_vendedor={$id_vendedor}' class='btn btn-sm btn-info text-white'>Visualizar</a> ";
                        echo " <a href='vendedor-atualizar.php?id_vendedor={$id_vendedor}' class='btn btn-sm btn-warning'>Atualizar</a> ";
                        echo " <a href='vendedor-excluir.php?id_vendedor={$id_vendedor}' class='btn btn-sm btn-danger'>Excluir</a> ";
                        echo "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conexao);
                    ?>
                </table>
            </div>
        </div>
    </main>
    <?php include "include/inc-footer-administrador.php" ?>
</body>
</html>
