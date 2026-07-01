<?php
$titulo_da_pagina = "Painel Administrativo";
include "include/inc-cabecalho.php";
include "inc-conexao.php";

$total_clientes = mysqli_fetch_assoc(mysqli_query($conexao, "select count(*) as total from tb_cliente"))['total'];
$total_veiculos = mysqli_fetch_assoc(mysqli_query($conexao, "select count(*) as total from tb_carro"))['total'];
$total_vendedores = mysqli_fetch_assoc(mysqli_query($conexao, "select count(*) as total from tb_vendedor"))['total'];
$total_disponiveis = mysqli_fetch_assoc(mysqli_query($conexao, "select count(*) as total from tb_carro where status = 'disponivel'"))['total'];
?>

<body class="admin-page d-flex flex-column min-vh-100">
    <?php include "include/inc-menu-administrador.php"; ?>

    <main class="container py-4 flex-shrink-0">
        <section class="admin-hero mb-4">
            <div>
                <span class="admin-kicker">Car Shop</span>
                <h1>Painel Administrativo</h1>
                <p>Gerencie clientes, veiculos e vendedores em um so lugar.</p>
            </div>
            <a href="index.php" class="btn btn-light">
                <i class="bi bi-shop me-1"></i> Ver vitrine
            </a>
        </section>

        <section class="row g-3 mb-4">
            <div class="col-6 col-lg-3">
                <div class="admin-stat">
                    <i class="bi bi-people-fill"></i>
                    <span>Clientes</span>
                    <strong><?= $total_clientes ?></strong>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="admin-stat">
                    <i class="bi bi-car-front-fill"></i>
                    <span>Veiculos</span>
                    <strong><?= $total_veiculos ?></strong>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="admin-stat">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Vendedores</span>
                    <strong><?= $total_vendedores ?></strong>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="admin-stat">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Disponiveis</span>
                    <strong><?= $total_disponiveis ?></strong>
                </div>
            </div>
        </section>

        <section class="row g-3">
            <div class="col-md-4">
                <a class="admin-action" href="veiculos-listagem.php">
                    <i class="bi bi-car-front"></i>
                    <span>
                        <strong>Gerenciar veiculos</strong>
                        <small>Cadastrar, editar, visualizar e excluir carros.</small>
                    </span>
                </a>
            </div>
            <div class="col-md-4">
                <a class="admin-action" href="cliente-listagem.php">
                    <i class="bi bi-people"></i>
                    <span>
                        <strong>Gerenciar clientes</strong>
                        <small>Consultar cadastros e manter contatos atualizados.</small>
                    </span>
                </a>
            </div>
            <div class="col-md-4">
                <a class="admin-action" href="vendedor-listagem.php">
                    <i class="bi bi-person-badge"></i>
                    <span>
                        <strong>Gerenciar vendedores</strong>
                        <small>Organizar dados das lojas e responsaveis.</small>
                    </span>
                </a>
            </div>
        </section>
    </main>

<?php
mysqli_close($conexao);
include "include/inc-footer-administrador.php";
?>
</body>
</html>
