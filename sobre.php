<?php
$titulo_da_pagina = "Sobre Nós - Nossa História";
include "inc-cabecalho.php";
?>

<body class="d-flex flex-column min-vh-100 bg-light">

  <?php include "inc-menu.php" ?>

  <header class="hero-section text-white text-center">
    <div class="container">
      <span class="text-primary fw-bold text-uppercase tracking-wider">Quem Somos</span>
      <h1 class="display-4 fw-bold mt-2 mb-3">Sua Próxima Conquista Começa Aqui</h1>
      <p class="lead text-muted mx-auto" style="max-width: 700px; color: #cbd5e1 !important;">
        Mais do que uma loja de automóveis, somos uma empresa dedicada a entregar segurança, procedência e excelência no mercado automotivo.
      </p>
    </div>
  </header>

  <main class="container my-5 flex-shrink-0">
    <div class="row g-5 align-items-center">

      <div class="col-lg-6">
        <div class="pe-lg-4">
          <h2 class="fw-bold text-dark mb-4" style="letter-spacing: -1px;">Nossa Trajetória</h2>
          <p class="text-secondary text-justify mb-3" style="line-height: 1.8;">
            Fundada com o propósito de revolucionar a experiência de compra de veículos seminovos e pioneiros no atendimento focado na transparência total, nossa empresa consolidou-se como referência de mercado. Nascemos da paixão por motores e do desejo de oferecer um ambiente onde o cliente tem a certeza do melhor negócio.
          </p>
          <p class="text-secondary text-justify mb-4" style="line-height: 1.8;">
            Ao longo dos anos, expandimos nossa estrutura e aprimoramos nossos processos de avaliação. Hoje, cada veículo que entra em nosso estoque é submetido a uma rigorosa perícia técnica e vistoria cautelar, assegurando que o padrão de qualidade exigido por nossos clientes seja estritamente atendido.
          </p>

          <div class="border-start border-primary border-4 ps-3 py-1 bg-white rounded-end shadow-sm">
            <span class="fst-italic text-dark fw-semibold d-block">"Compromisso não é apenas uma palavra, é o motor que nos move todos os dias."</span>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="position-relative">
          <img src="img/fachada_loja.jpg" class="img-fluid rounded-3 shadow-lg w-100" alt="Showroom da Loja" onerror="this.src='https://images.unsplash.com/photo-1562575214-da9fcf59b907?q=80&w=800&auto=format&fit=crop'">
        </div>
      </div>

    </div>

    <div class="row g-4 my-4">
      <div class="col-md-4">
        <div class="card card-premium h-100 p-4 shadow-sm bg-white">
          <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
              <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.078-.078-4.5-4.5a.5.5 0 0 0-.708 0z" />
            </svg>
          </div>
          <h5 class="fw-bold text-dark">Procedência Rígida</h5>
          <p class="text-muted small mb-0">Cada veículo inserido em nossa plataforma passa por triagem minuciosa com laudo 100% aprovado.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-premium h-100 p-4 shadow-sm bg-white">
          <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
              <path d="m8 0 1.669.864 1.858-.282.842 1.68 1.337 1.32-.26 1.866.88 1.66-1.127 1.503.312 1.85-1.748.704-.747 1.722L8 11.81l-1.636.853-.747-1.722-1.748-.704.312-1.85-1.127-1.503.88-1.66-.26-1.866 1.337-1.32.842-1.68L6.331.864z" />
            </svg>
          </div>
          <h5 class="fw-bold text-dark">Padrão de Excelência</h5>
          <p class="text-muted small mb-0">Atendimento personalizado focado no perfil e na real necessidade de mobilidade de cada cliente.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-premium h-100 p-4 shadow-sm bg-white">
          <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-handshake-fill" viewBox="0 0 16 16">
              <path d="M7.177 9.244a6 6 0 0 0-2.422-1.812l-.002-.013a1 1 0 0 0-1.094-.633L1 7.211V14a1 1 0 0 0 1 1h7.453a1 1 0 0 0 .73-.324l3.12-3.422a1 1 0 0 0-.214-1.555L11 8.211l-3.823 1.033z" />
            </svg>
          </div>
          <h5 class="fw-bold text-dark">Negociação Segura</h5>
          <p class="text-muted small mb-0">Parcerias com as principais instituições financeiras para garantir taxas competitivas e contratos transparentes.</p>
        </div>
      </div>
    </div>

  </main>

  <?php include "inc-footer.php" ?>
</body>

</html>