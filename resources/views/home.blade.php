<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FLORENCE</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('tema/tema/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('tema/tema/assets/css/style.css') }}" rel="stylesheet">

  <style>
    /* Reset global */
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Poppins', sans-serif;
    }

    /* Estilo do Hero Section */
    #hero {
      background-color: #c04564;
      color: white;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }

    #hero h1 {
      font-size: 40px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    #hero h2 {
      font-size: 24px;
      margin-bottom: 30px;
    }

    .btn-get-started {
      background-color: #c04564;
      color: #eb6e8d;
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 30px;
      text-transform: uppercase;
      font-size: 16px;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .btn-get-started:hover {
      background-color: #eb6e8d;
      color: white;
    }

    /* Estilos principais da página */
    main {
      padding: 60px 20px;
    }

    .container {
      max-width: 1140px;
      margin: 0 auto;
    }

    #about {
      background-color: #fff;
      padding: 60px 0;
    }

    #about h3 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #333;
    }

    #about p {
      font-size: 16px;
      line-height: 1.7;
      color: #666;
    }

    #cta {
      background-color: #eb6e8d;
      color: white;
      padding: 60px 20px;
      text-align: center;
    }

    #cta h3 {
      font-size: 30px;
      font-weight: bold;
    }

    #cta p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .cta-btn {
      background-color: #ffffff;
      color: #c04564;
      padding: 15px 35px;
      font-weight: bold;
      text-transform: uppercase;
      border-radius: 50px;
      font-size: 18px;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .cta-btn:hover {
      background-color: #c04564;
      color: white;
    }

    /* Responsividade */
    @media (max-width: 767px) {
      #hero h1 {
        font-size: 30px;
      }

      #hero h2 {
        font-size: 20px;
      }

      .btn-get-started {
        padding: 10px 25px;
        font-size: 14px;
      }

      .cta-btn {
        padding: 12px 30px;
        font-size: 16px;
      }

      #about h3 {
        font-size: 24px;
      }

      #about p {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1 class="text-light"><a href="{{ route('home') }}">FLORENCE</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('forum') }}">Fórum</a></li>
          <li><a href="{{ route('chame') }}">Chame por ajuda</a></li>
          <li><a class="getstarted" href="{{ route('login') }}">Administrador</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>BEM VINDO A FLORENCE</h1>
      <h2>UM ESPAÇO SEGURO PARA TODAS AS VÍTIMAS DE VIOLÊNCIA DOMÉSTICA</h2>
      <a class="btn-get-started scrollto" href="{{ route('forum') }}">FÓRUM</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3>VOCÊ SABE O QUE É VIOLÊNCIA DOMÉSTICA?</h3>
            <p>
              Violência doméstica é um tipo de abuso que ocorre dentro do ambiente familiar ou entre parceiros íntimos, envolvendo comportamentos físicos, emocionais, sexuais, ou econômicos, que têm como objetivo exercer controle e poder sobre a outra pessoa. Pode se manifestar de diversas formas, como agressões físicas, ameaças, humilhações, isolamento social, manipulação financeira, entre outras. É uma violação grave dos direitos humanos e pode deixar marcas profundas nas vítimas, afetando não só sua integridade física, mas também sua saúde mental e emocional. A luta contra a violência doméstica envolve a conscientização, a proteção das vítimas e o enfrentamento das causas subjacentes desse fenômeno.    </p>
          </div>
          <div class="col-lg-6">
            <img src="{{ asset('tema/tema/assets/img/about.png') }}" alt="Imagem explicativa sobre violência doméstica">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta">
      <div class="container">
        <h3>Se você passa por isso:</h3>
        <p>Saiba que sua situação atual tem saída. Ligue para a polícia/delegacia da mulher.</p>
        <a class="cta-btn" href="{{ route('chame') }}">Chame por ajuda</a>
      </div>
    </section><!-- End Cta Section -->

    <!-- Início do Guia Visual sobre Violência Doméstica -->
  <div style="border: 2px solid #ffffff00; padding: 20px; font-family: 'Arial', sans-serif; max-width: 80%; margin: auto;">

    <br>
    <br>
    <br>
    <br>
    <br>
  
    <h1 style="text-align: center; color: #c04564; background-color: #ffffff; padding: 10px;">Violência Doméstica - Lei Maria da Penha</h1>
    <p style="color: #ffffff; background-color: #eb6e8da9; padding: 8px; border-left: 5px solid #c04564;">
      <strong>Quem pode buscar ajuda:</strong> Mulheres que sofreram violência doméstica.
    </p>
    <p style="color: #ffffff; background-color: #eb6e8da9; padding: 8px; border-left: 5px solid #c04564;">
      <strong>O que constitui violência:</strong> Agressão física, psicológica, sexual, patrimonial ou moral.
    </p>
    <p style="color: #ffffff; background-color: #eb6e8da9; padding: 8px; border-left: 5px solid #c04564;">
      <strong>O papel da polícia:</strong> Proteger a vítima, aplicar medidas protetivas e garantir a sua segurança.
    </p>
   
    <br>
    <br>
    <br>
    <br>
    <br>
  
    </div>
    <!-- Fim do Guia Visual sobre Violência Doméstica -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 footer-info">
            <h3>FLORENCE</h3>
            <p>Este é o trabalho integrador de Eduarda de Almeida Oliveira do terceiro ano de informática do IFMG Campus Formiga.</p>
          </div>
          <div class="col-lg-3 footer-links">
            <h4>Links rápidos</h4>
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('forum') }}">Fórum</a></li>
              <li><a href="{{ route('chame') }}">Chame por ajuda</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('tema/tema/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/aos/aos.js') }}"></script>
  <script>
    // Inicializando AOS para animações
    AOS.init();
  </script>

</body>

</html>
