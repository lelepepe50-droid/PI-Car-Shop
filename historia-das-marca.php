<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>história das marcas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-secondary">

    <?php include "inc-menu.php" ?>

    <main class="container mt-4 flex-shrink-0 p-2"> 

    <div class="container text-center pt-3 mb-1">
 
      <div class="row g-3">
 
        <div class="col-3">
 
          <div class="card h-100">
            <img src="/img/img/volkwagem.jpg" class="card-img-top" alt="Dodge">
            <!-- Adicionado d-flex flex-column -->
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">volkwagem</h5>
              <p class="card-text">A história da Volkswagen no Brasil começou em 23 de março de 1953, em um galpão no bairro do Ipiranga (SP), inicialmente apenas montando o Fusca com peças importadas. A marca rapidamente se consolidou como uma das maiores forças da indústria automotiva nacional, revolucionando a cultura e a mobilidade no país.</p>
 
              <a class="btn btn-primary mt-auto">volkwagem</a>
            </div>
          </div>
        </div>
 
        <div class="col-3">
          <div class="card h-100">
            <img src="/img/img/honda.jpg" class="card-img-top" alt="Ford">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">honda</h5>
              <p class="card-text">A trajetória da Honda no Brasil começou em outubro de 1971, em São Paulo, inicialmente apenas como importadora de motocicletas. Rapidamente, a marca transformou a mobilidade nacional, tornando-se sinônimo de expansão industrial, foco no consumidor e liderança absoluta no mercado de duas rodas.</p>
              <a class="btn btn-primary mt-auto">honda</a>
            </div>
          </div>
        </div>
 
        <div class="col-3">
          <div class="card h-100">
            <img src="/img/img/fiat.jpg" class="card-img-top" alt="BMW">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">fiat</h5>
              <p class="card-text">A Fiat do Brasil iniciou suas operações em 1976 com a inauguração de sua fábrica em Betim, Minas Gerais. Quebrando a tradição das montadoras focadas no ABC Paulista, a marca consolidou-se como líder de mercado e pioneira na introdução de tecnologias como o primeiro carro do mundo movido a etanol (em 1979).</p>
              <a  class="btn btn-primary mt-auto">fiat</a>
            </div>
          </div>
        </div>
 
        <div class="col-3">
          <div class="card h-100">
            <img src="/img/img/toyota.jpg" class="card-img-top" alt="Chevrolet">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">toyota</h5>
              <p class="card-text">A Toyota do Brasil iniciou suas operações em 1958, marcando um feito histórico: foi a primeira fábrica da montadora japonesa construída fora do Japão. A trajetória da marca no país é marcada pela evolução de utilitários rústicos para a produção local de sedãs e SUVs de alta confiabilidade.</p>
              <a  class="btn btn-primary mt-auto">toyota</a>
            </div>
          </div>
        </div>
 
      </div>
    </div>
    
    </main>
   <?php include "inc-footer.php"?>
</body>
</html>