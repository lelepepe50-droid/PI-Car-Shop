<!DOCTYPE html>
<html lang="pt-br">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Página principal</title>
</head>
 
<body class="d-flex flex-column min-vh-100 bg-light">
 
  <main>
 
    <?php include "inc-menu.php" ?>
 
    <div class="container text-center pt-3 mb-1">
 
      <div class="row g-3">
 
        <div class="col-3">
 
          <div class="card h-100">
            <img src="/img/img/dodge challeger 2015.jpg" class="card-img-top" alt="Dodge">
            <!-- Adicionado d-flex flex-column -->
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Dodge</h5>
              <p class="card-text">A Dodge foi fundada em 1914 pelos irmãos John e Horace Dodge. Inicialmente uma fabricante de peças e motores em Detroit, a marca destacou-se por sua alta qualidade mecânica. Conhecida por lançar veículos potentes, robustos e inovadores, ela se consolidou como um dos maiores ícones da engenharia automotiva americana.</p>
 
              <a  class="btn btn-primary mt-auto">Dodge</a>
            </div>
          </div>
        </div>
 
        <div class="col-3">
          <div class="card h-100">
            <img src="/img/img/ford mustang gt.jpg" class="card-img-top" alt="Ford">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Ford</h5>
              <p class="card-text">A Ford Motor Company foi fundada em 1903 nos Estados Unidos por Henry Ford. Ela revolucionou a indústria global ao introduzir a linha de montagem e o fordismo, modelo de produção em massa que barateou os veículos e popularizou o automóvel, transformando o transporte e a economia mundial.</p>
              <a  class="btn btn-primary mt-auto">Ford</a>
            </div>
          </div>
        </div>
 
        <div class="col-3">
          <div class="card h-100">
            <img src="/img/img/bmw m3.jpg" class="card-img-top" alt="BMW">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">BMW</h5>
              <p class="card-text">A BMW (Bayerische Motoren Werke, ou Fábrica de Motores da Baviera) nasceu em 1916 na Alemanha. Inicialmente focada na fabricação de motores de avião, a marca foi forçada a se reinventar após a Primeira Guerra Mundial e hoje é um dos maiores impérios mundiais de veículos de luxo e alto desempenho.</p>
              <a  class="btn btn-primary mt-auto">BMW</a>
            </div>
          </div>
        </div>
 
        <div class="col-3">
          <div class="card h-100">
            <img src="/img/img/Chevroletcamarozl1.jpg" class="card-img-top" alt="Chevrolet">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Chevrolet</h5>
              <p class="card-text">A Chevrolet (General Motors) iniciou suas atividades no Brasil em janeiro de 1925, no bairro do Ipiranga, em São Paulo. Ao longo de mais de um século, a montadora consolidou-se como uma das maiores potências automotivas do país, destacando-se por veículos que se tornaram símbolos de diferentes épocas.</p>
              <a class="btn btn-primary mt-auto">Chevrolet</a>
            </div>
          </div>
        </div>
 
      </div>
    </div>
 
 
    <div class="container text-center pt-3 mb-1">
      <div class="row">
        <div class="col-3">
 
        </div>
        <div class="col-3">
 
        </div>
        <div class="col-3">
 
        </div>
        <div class="col-3">
 
        </div>
      </div>
    </div>
 
  </main>
  <?php include "inc-footer.php" ?>
</body>
 
</html>