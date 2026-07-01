<?php
$titulo_da_pagina = "Listagem de veiculos";
include "include/inc-cabecalho.php";
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">
    <?php include "include/inc-menu-administrador.php"; ?>

    <main class="container pt-3 mb-2">
        <h1 class="text-white">Listagem de veiculos</h1>
        <div class="row">
            <div class="col">
                <a href="veiculos-cadastrar.php" class="btn btn-primary mb-3">Cadastrar Novo Veiculo</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Quilometragem</th>
                        <th>Placa</th>
                        <th>Cor</th>
                        <th>Preco</th>
                        <th>Status</th>
                        <th scope="col">Acoes</th>
                    </tr>
                    <?php
                    include "inc-conexao.php";

                    $sql = "select * from tb_carro order by id_carro, marca, modelo";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($linha_resultado = mysqli_fetch_assoc($resultado)) {
                        $id_carro = (int) $linha_resultado['id_carro'];
                        echo "<tr>";
                        echo "<td>{$id_carro}</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['marca']) . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['modelo']) . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['ano']) . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['quilometragem']) . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['placa']) . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['cor']) . "</td>";
                        echo "<td>R$ " . number_format((float) $linha_resultado['preco'], 2, ',', '.') . "</td>";
                        echo "<td>" . htmlspecialchars($linha_resultado['status']) . "</td>";
                        echo "<td>";
                        echo " <a href='veiculos-visualizar.php?id_carro={$id_carro}' class='btn btn-sm btn-info text-white'>Visualizar</a> ";
                        echo " <a href='veiculos-atualizar.php?id_carro={$id_carro}' class='btn btn-sm btn-warning'>Atualizar</a> ";
                        echo " <a href='veiculos-excluir.php?id_carro={$id_carro}' class='btn btn-sm btn-danger'>Excluir</a> ";
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
