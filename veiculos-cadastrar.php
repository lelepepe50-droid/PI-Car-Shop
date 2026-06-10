<?php 
$titulo_da_pagina = "Cadastrar veiculos";
include "inc-cabecalho.php"
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">

  
    <?php include "inc-menu.php" ?>

    <main class="container mt-4 flex-shrink-0 p-2">
        
        <div class="row justify-content-center ">
            <div class="col-md-6 col-lg-5"> 
                
                <div class="card shadow p-4 rounded bg-white">
                    <h1 class="text-center mb-4 fs-3 text-dark">
                        Cadastrar Veículos
                    </h1>
                    
                    <form action="veiculos-salvar.php" method="post">

                        <!-- 1. Marca -->
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" placeholder="Digite a marca" required>
                        </div>

                        <!-- 2. Modelo -->
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Digite o modelo" required>
                        </div>

                        <!-- 3. Ano -->
                        <div class="mb-3">
                            <label for="ano" class="form-label">Ano</label>
                            <input type="number" name="ano" id="ano" class="form-control" placeholder="Ex: 2024" required>
                        </div>

                        <!-- 4. Quilometragem -->
                        <div class="mb-3">
                            <label for="quilometragem" class="form-label">Quilometragem</label>
                            <input type="text" name="quilometragem" id="quilometragem" class="form-control" placeholder="Digite a quilometragem">
                        </div>

                        <!-- 5. Placa -->
                        <div class="mb-3">
                            <label for="placa" class="form-label">Placa</label>
                            <input type="text" name="placa" id="placa" class="form-control" placeholder="Digite a placa">
                        </div>



                        <!-- 6. Combustível -->

                        <div class="mb-3">
                            <label for="combustivel" class="form-label">Combustível</label>
                            <select name="combustivel" id="combustivel" class="form-select">
                                <option value="gasolina" selected>Gasolina</option>
                                <option value="etanol">Etanol</option>
                                <option value="flex">Flex</option>
                                <option value="diesel">Diesel</option>
                                <option value="hibrido">Híbrido / Elétrico</option>
                            </select>
                        </div>
                         
                        <!-- 7. Foto -->
                        <div class="mb-3">
                            <label for="placa" class="form-label">Foto</label>
                            <input type="text" name="foto" id="foto" class="form-control" placeholder="Coloque o link da foto">
                        </div>

                        <!-- 8. Cor -->
                        <div class="mb-4">
                            <label for="cor" class="form-label">Cor</label>
                            <input type="text" name="cor" id="cor" class="form-control" placeholder="Digite a cor">
                        </div>

                        <!-- 6. Preço -->
                        <div class="mb-3">
                            <label for="preco" class="form-label">Preço</label>
                            <input type="text" name="preco" id="preco" class="form-control" placeholder="Digite o preço">
                        </div>

                        <!-- Botão de Envio -->
                        <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold">
                            Cadastrar Veículos
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include "inc-footer.php"?>

</body>
</html>