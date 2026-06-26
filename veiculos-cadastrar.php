<?php 
$titulo_da_pagina = "Cadastrar Veículos";
include "include/inc-cabecalho.php";
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">

    <?php include "include/inc-menu.php" ?>

    <main class="container mt-4 mb-5 flex-shrink-0 p-2">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7"> 
                
                <div class="card shadow p-4 rounded bg-white border-0">
                    <h1 class="text-center mb-4 fs-3 text-dark fw-normal">
                        Cadastrar Veículo
                    </h1>
                    
                    <form action="veiculos-salvar.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="marca" class="form-label text-secondary">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control" placeholder="Ex: Chevrolet" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="modelo" class="form-label text-secondary">Modelo</label>
                                <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Ex: Onix" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ano" class="form-label text-secondary">Ano</label>
                                <input type="number" name="ano" id="ano" class="form-control" placeholder="Ex: 2024" min="1900" max="2030" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cor" class="form-label text-secondary">Cor</label>
                                <input type="text" name="cor" id="cor" class="form-control" placeholder="Ex: Prata" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="quilometragem" class="form-label text-secondary">Quilometragem (KM)</label>
                                <input type="number" name="quilometragem" id="quilometragem" class="form-control" placeholder="Ex: 15000" min="0" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="preco" class="form-label text-secondary">Preço (R$)</label>
                                <input type="number" name="preco" id="preco" class="form-control" step="0.01" placeholder="Ex: 59900.00" min="0" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="placa" class="form-label text-secondary">Placa</label>
                                <input type="text" name="placa" id="placa" class="form-control text-uppercase" placeholder="AAA0A00 ou AAA0000" maxlength="7" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="combustivel" class="form-label text-secondary">Combustível</label>
                                <select name="combustivel" id="combustivel" class="form-select" required>
                                    <option value="" disabled selected>Selecione...</option>
                                    <option value="flex">Flex</option>
                                    <option value="gasolina">Gasolina</option>
                                    <option value="etanol">Etanol</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="hibrido_eletrico">Híbrido / Elétrico</option>
                                </select>
                            </div>
                        </div>
                         
                        <div class="mb-4">
                            <label for="foto" class="form-label text-secondary">Link da Foto</label>
                            <input type="url" name="foto" id="foto" class="form-control" placeholder="https://exemplo.com/foto.jpg" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2.5 fw-semibold shadow-sm">
                            Cadastrar Veículo
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include "include/inc-footer.php" ?>

</body>
</html>