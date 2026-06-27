<?php 
$titulo_da_pagina = "Cadastrar Vendedor";
include "include/inc-cabecalho.php"
?>

<body class="d-flex flex-column min-vh-100 bg-secondary">

  <?php include "include/inc-menu.php" ?>

  <main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card shadow-sm p-4 border-0">

        <h1 class="text-center mb-4 h2 fw-normal text-dark">
          Cadastro do Vendedor
        </h1>

        <form action="vendedor-salvar.php" method="POST" enctype="multipart/form-data">

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="nome" class="form-label text-secondary">Nome Completo</label>
      <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do vendedor" maxlength="100" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="cpf" class="form-label text-secondary">CPF</label>
      <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="email" class="form-label text-secondary">E-mail</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="exemplo@email.com" maxlength="100" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="telefone" class="form-label text-secondary">Telefone</label>
      <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(11) 99999-9999" maxlength="20" required>
    </div>
  </div>

  <div class="mb-3">
    <label for="senha" class="form-label text-secondary">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Crie uma senha segura" maxlength="225" required>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="nome_da_loja" class="form-label text-secondary">Nome da Loja</label>
      <input type="text" id="nome_da_loja" name="nome_da_loja" class="form-control" placeholder="Nome fantasia do estabelecimento" maxlength="250" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="endereco" class="form-label text-secondary">Endereço da Loja</label>
      <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Rua, Número, Bairro, Cidade - UF" maxlength="250" required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <label for="foto_vendedor" class="form-label text-secondary">Foto de Perfil do Vendedor</label>
      <input type="file" id="foto_vendedor" name="foto_vendedor" class="form-control" accept="image/*" required>
    </div>

    <div class="col-md-6 mb-4">
      <label for="foto_da_loja" class="form-label text-secondary">Foto da Loja</label>
      <input type="file" id="foto_da_loja" name="foto_da_loja" class="form-control" accept="image/*" required>
    </div>
  </div>

  <div class="form-check mb-4">
    <input type="checkbox" class="form-check-input" id="termos" name="termos" value="aceito" required>
    <label class="form-check-label text-secondary" for="termos">
      Aceito os termos de uso e condições
    </label>
  </div>

  <button type="submit" class="btn btn-primary w-100 py-2.5 fw-semibold shadow-sm">
    Cadastrar Vendedor
  </button>

</form>

        </div>
      </div>
    </div>
  </main>

  <?php include "include/inc-footer.php"?>

</body>

</html>