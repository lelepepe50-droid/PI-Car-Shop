<?php
$titulo_da_pagina = "Car Shop - Venda de Carros";
include "include/inc-cabecalho.php";
include "inc-conexao.php";

$sql = "select * from tb_carro order by status, marca, modelo";
$resultado = mysqli_query($conexao, $sql);

$veiculos = [];
while ($linha = mysqli_fetch_assoc($resultado)) {
    $veiculos[] = $linha;
}

$total_veiculos = count($veiculos);
$total_disponiveis = 0;
$menor_preco = null;

foreach ($veiculos as $veiculo) {
    if ($veiculo['status'] == 'disponivel') {
        $total_disponiveis++;
    }

    $preco = (float) $veiculo['preco'];
    if ($menor_preco === null || $preco < $menor_preco) {
        $menor_preco = $preco;
    }
}
?>

<body class="home-page d-flex flex-column min-vh-100">
    <?php include "include/inc-menu.php"; ?>

    <main class="flex-shrink-0">
        <section class="home-hero">
            <div class="home-hero__overlay"></div>
            <div class="container home-hero__content">
                <div class="home-hero__text">
                    <span class="home-eyebrow">Car Shop Seminovos</span>
                    <h1>Encontre o carro certo para sua proxima conquista.</h1>
                    <p>Uma vitrine automotiva moderna para comparar carros, consultar detalhes e encontrar boas oportunidades com mais seguranca.</p>

                    <div class="home-hero__actions">
                        <a href="#estoque" class="btn btn-primary btn-lg">
                            <i class="bi bi-car-front me-2"></i>Ver estoque
                        </a>
                        <a href="vendedor-cadastrar.php" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-shop me-2"></i>Anunciar veiculo
                        </a>
                    </div>
                </div>

                <aside class="home-panel">
                    <span>Resumo da loja</span>
                    <strong>Estoque pronto para consulta</strong>
                    <div class="home-panel__grid">
                        <div>
                            <small>Veiculos</small>
                            <b><?= $total_veiculos ?></b>
                        </div>
                        <div>
                            <small>Disponiveis</small>
                            <b><?= $total_disponiveis ?></b>
                        </div>
                    </div>
                    <a href="cliente-cadastrar.php" class="btn btn-dark w-100">
                        <i class="bi bi-person-plus me-2"></i>Cadastrar interesse
                    </a>
                </aside>
            </div>
        </section>

        <section class="home-benefits">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="home-benefit">
                            <i class="bi bi-shield-check"></i>
                            <div>
                                <strong>Compra com procedencia</strong>
                                <span>Informacoes organizadas para comparar antes de decidir.</span>
                            </div>
<<<<<<< HEAD
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-benefit">
                            <i class="bi bi-cash-coin"></i>
                            <div>
                                <strong><?= $menor_preco !== null ? 'A partir de R$ ' . number_format($menor_preco, 2, ',', '.') : 'Precos sob consulta' ?></strong>
                                <span>Valores em destaque para facilitar sua escolha.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-benefit">
                            <i class="bi bi-headset"></i>
                            <div>
                                <strong>Atendimento rapido</strong>
                                <span>Cadastre seu interesse e avance para a negociacao.</span>
                            </div>
                        </div>
                    </div>
=======
                        <input id="imagem" type="file" name="imagem" accept="image/*" required>
tem menu de contexto
                        </div>    
                    </div>  
>>>>>>> c00403d20510b7d4790f9241490300097cf688ba
                </div>
            </div>
        </section>

        <section id="estoque" class="home-inventory py-5">
            <div class="container">
                <div class="home-section-title">
                    <span>Estoque selecionado</span>
                    <h2>Carros disponiveis</h2>
                    <p>Veja modelo, ano, quilometragem, cor, placa e preco em cards criados para uma vitrine profissional.</p>
                </div>

                <?php if (empty($veiculos)) { ?>
                    <div class="home-empty">
                        <i class="bi bi-car-front"></i>
                        <h3>Nenhum veiculo cadastrado ainda</h3>
                        <p>Cadastre o primeiro carro para preencher a vitrine da loja.</p>
                        <a href="veiculos-cadastrar.php" class="btn btn-primary">Cadastrar veiculo</a>
                    </div>
                <?php } else { ?>
                    <div class="row g-4">
                        <?php foreach ($veiculos as $linha) { ?>
                            <div class="col-12 col-md-6 col-xl-4">
                                <article class="vehicle-card">
                                    <div class="vehicle-card__media">
                                        <img src="<?= htmlspecialchars($linha['foto']) ?>" alt="<?= htmlspecialchars($linha['marca'] . ' ' . $linha['modelo']) ?>">
                                        <span class="vehicle-card__badge"><?= htmlspecialchars($linha['status']) ?></span>
                                    </div>

                                    <div class="vehicle-card__body">
                                        <div class="vehicle-card__title">
                                            <div>
                                                <span><?= htmlspecialchars($linha['marca']) ?></span>
                                                <h3><?= htmlspecialchars($linha['modelo']) ?></h3>
                                            </div>
                                            <strong>R$ <?= number_format((float) $linha['preco'], 2, ',', '.') ?></strong>
                                        </div>

                                        <div class="vehicle-card__specs">
                                            <span><i class="bi bi-calendar3"></i><?= htmlspecialchars($linha['ano']) ?></span>
                                            <span><i class="bi bi-speedometer2"></i><?= number_format((float) $linha['quilometragem'], 0, ',', '.') ?> km</span>
                                            <span><i class="bi bi-palette"></i><?= htmlspecialchars($linha['cor']) ?></span>
                                        </div>

                                        <div class="vehicle-card__footer">
                                            <small>Placa <?= htmlspecialchars($linha['placa']) ?></small>
                                            <a href="veiculos-visualizar.php?id_carro=<?= (int) $linha['id_carro'] ?>" class="btn btn-sm btn-outline-primary">Detalhes</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="home-cta">
            <div class="container">
                <div class="home-cta__box">
                    <div>
                        <span>Quer vender seu carro?</span>
                        <h2>Anuncie na Car Shop e deixe seu veiculo em uma vitrine mais profissional.</h2>
                    </div>
                    <a href="veiculos-cadastrar.php" class="btn btn-light btn-lg">
                        <i class="bi bi-plus-circle me-2"></i>Cadastrar veiculo
                    </a>
                </div>
            </div>
        </section>

        <?php include "include/inc-carrousel-marcas.php"?>
    </main>

    <?php include "include/inc-footer.php"; ?>
</body>
</html>
<?php mysqli_close($conexao); ?>
