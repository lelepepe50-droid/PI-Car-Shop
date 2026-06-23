<?php 
$titulo_da_pagina = "Cadastrar Vendedor";
include "inc-cabecalho.php"
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">

  <?php include "inc-menu.php" ?>

  <main class="container my-9">
    <div class="row justify-content-center">
      <!-- Largura ideal para um formulário de cliente compacto -->
      <div class="col-md-9">
        <div class="card shadow-sm p-4 border-0">

          <h1 class="text-center mb-4 h2 fw-normal text-dark">
            Cadastro do vendedor
          </h1>

          <!-- Formulário configurado para enviar os dados via POST -->
          <form action="vendedor-salvar.php" method="POST">

            <div class="row">
              <!-- Nome -->
              <div class="col-md-6 mb-3">
                <label for="nome" class="form-label text-secondary">Nome Completo</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
              </div>

              <!-- CPF -->
              <div class="col-md-6 mb-3">
                <label for="cpf" class="form-label text-secondary">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" required>
              </div>
            </div>

            <div class="row">
              <!-- Email -->
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label text-secondary">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
              </div>

              <!-- Telefone -->
              <div class="col-md-6 mb-3">
                <label for="telefone" class="form-label text-secondary">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(11) 99999-9999" maxlength="15" required>
              </div>
            </div>

            <!-- Senha -->
            <div class="mb-3">
              <label for="senha" class="form-label text-secondary">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>

             <!-- nome da loja -->
              <div class="col-md-6 mb-3">
                <label for="telefone" class="form-label text-secondary">nome da loja</label>
                <input type="text" id="nome_da_loja" name="nome_da_loja" class="form-control" placeholder="digite o nome da loja" maxlength="15" required>
              </div>
            

             <!-- endreço da loja -->
              <div class="col-md-6 mb-3">
                <label for="telefone" class="form-label text-secondary">endereço da loja</label>
                <input type="text" id="foto" name="foto" class="form-control" placeholder="digite o endereço" maxlength="15" required>
              </div>
            

             <!-- foto da loja -->
              <div class="col-md-6 mb-3">
                <label for="telefone" class="form-label text-secondary">foto da loja</label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="tirar uma foto" maxlength="15" required>
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
              Cadastrar
            </button>

          </form>

        </div>
      </div>
    </div>
  </main>

  <?php include "inc-footer.php"?>

</body>

</html>