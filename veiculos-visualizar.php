<?php 
$titulo_da_pagina = "Cadastrar veiculos";
include "include/inc-cabecalho.php"
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">

  <?php include "include/inc-menu.php"?>

  <main class="container my-5">
    <div class="row justify-content-center">
      <!-- Largura ideal para um formulário de cliente compacto -->
      <div class="col-md-6">
        <div class="card shadow-sm p-4 border-0">

          <h1 class="text-center mb-4 h2 fw-normal text-dark">
            Cadastro do veiculos
          </h1>

          <!-- Formulário configurado para enviar os dados via POST -->
          <form action="veiculos-salvar.php" method="POST">

            <div class="row">
              <!-- 1. Marca -->
              <div class="col-md-6 mb-3">
                <label for="nome" class="form-label text-secondary">Marca</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
              </div>

               <!-- 2. Modelo -->
              <div class="col-md-6 mb-3">
                <label for="cpf" class="form-label text-secondary">Modelo</label>
                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" required>
              </div>
            </div>

            <div class="row">
              <!-- 3. Ano -->
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label text-secondary">Ano</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
              </div>

               <!-- 4. Quilometragem -->
              <div class="col-md-6 mb-3">
                <label for="telefone" class="form-label text-secondary">Quilometragem</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(11) 99999-9999" maxlength="15" required>
              </div>
            </div>

             <!-- 5. Placa -->
            <div class="mb-3">
              <label for="senha" class="form-label text-secondary">Placa</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>
            
            <!-- 6. Combustível -->
             <div class="mb-3">
              <label for="senha" class="form-label text-secondary">Combustível<</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>

             <!-- 7. Foto -->
              <div class="mb-3">
              <label for="senha" class="form-label text-secondary">Foto<</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>

             <!-- 6. Preço -->
             <div class="mb-3">
              <label for="senha" class="form-label text-secondary">Preço<</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-4">
              <input type="checkbox" class="form-check-input" id="termos" name="termos" value="aceito" required>
              <label class="form-check-label text-secondary" for="termos">
                Aceito os termos de uso
              </label>
            </div>

            <!-- Botão -->
            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold" style="background-color: #0d6efd; border: none;">
              Cadastrar Veículos
            </button>

          </form>

        </div>
      </div>
    </div>
  </main>

  <?php include "include/inc-footer.php"?>

</body>

</html>