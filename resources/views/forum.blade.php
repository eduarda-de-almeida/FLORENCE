<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FLORENCE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png" rel="icon') }}">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('tema/tema/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('tema/tema/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/tema/assets/css/style.css')}}" rel="stylesheet">

  <style>
    /* Estilos para o layout geral */
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 0;
    }
    
    main {
      padding: 25px 20px;
    }
    
    h2 {
      font-size: 24px;
      margin-bottom: 30px;
      font-weight: 600;
    }
    
    /* Estilo de formulário e relato */
    textarea.form-control {
      border-radius: 5px;
      box-shadow: none;
      border: 1px solid #ced4da;
      padding: 15px;
      font-size: 16px;
    }
    
    textarea.form-control:focus {
      border-color: #c04564;
      box-shadow: 0 0 0 0.2rem rgba(172, 27, 87, 0.25);
    }
    
    button.btn-primary {
      background-color: #c04564;
      border-color: #c04564;
      color: white;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
    }
    
    button.btn-primary:hover {
      background-color: #c04564;
      border-color: #c04564;
    }
    
    .relatos-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      margin-bottom: 50px;
    }
    
    .relatos .entry {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .relatos .entry .entry-title {
      font-size: 20px;
      color: #34495e;
      font-weight: bold;
    }

    .relatos .entry .entry-meta {
      font-size: 14px;
      color: #7f8c8d;
    }

    .relatos .entry .entry-content p {
      color: #2c3e50;
      font-size: 16px;
    }

    .relatos .entry .read-more a {
      color: #c04564;
      font-weight: bold;
    }

    .relatos .entry .read-more a:hover {
      color: #c04564;
    }

    /* Estilos Responsivos */
    @media (max-width: 992px) {
      .relatos-form {
        padding: 20px;
      }
      
      .relatos {
        padding: 0 15px;
      }
      
      h2 {
        font-size: 22px;
        margin-bottom: 20px;
      }

      .relatos .entry .entry-title {
        font-size: 18px;
      }

      .relatos .entry .entry-content p {
        font-size: 14px;
      }

      /* Navbar em telas pequenas */
      header .navbar ul {
        flex-direction: column;
        align-items: center;
      }

      header .navbar ul li {
        margin: 10px 0;
      }

      /* Ajustes no Footer */
      .footer-contact,
      .footer-info {
        margin-bottom: 15px;
      }
    }

    @media (max-width: 576px) {
      h2 {
        font-size: 20px;
      }

      textarea.form-control {
        font-size: 14px;
        padding: 10px;
      }

      button.btn-primary {
        font-size: 14px;
        padding: 8px 15px;
      }
      
      .relatos-form {
        padding: 15px;
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

      <!-- ======= Navbar ======= -->    
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a class="active" href="{{ route('forum') }}">Fórum</a></li>
          <li><a href="{{ route('chame') }}">Chame por ajuda</a></li>
          <li><a class="getstarted" href="{{ route('login') }}">Administrador</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>FÓRUM</h2>
            <p>Faça seu relato anonimamente. O relato passará por aprovação antes de ser publicado.</p>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- Formulário para envio de relato -->
    <div class="relatos-form">
      <form action="{{ route('relatos.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="conteudo">Seu Relato:</label>
          <textarea id="conteudo" name="conteudo" rows="6" class="form-control" placeholder="Escreva seu relato aqui..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar Relato</button>
      </form>
    </div>

    <!-- Listar Relatos Aprovados -->
    <div class="relatos">
      <h2 class="mt-5">Relatos Aprovados</h2>
      @if (isset($relatosAprovados) && $relatosAprovados->isEmpty())
        <p>Nenhum relato foi aprovado ainda.</p>
      @else
        @foreach($relatosAprovados as $relato)
          <article class="entry">
            <div class="entry-img">
              <img src="assets/img/blog/blog-{{ $loop->index + 2 }}.jpg" alt="" class="img-fluid">
            </div>
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $relato->autor ?? 'Anônimo' }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time>{{ $relato->created_at ? $relato->created_at->format('d M Y') : 'Data não disponível' }}</time></li>
              </ul>
            </div>
            <div class="entry-content">
              <p>{{ $relato->conteudo ?? 'Conteúdo não disponível.' }}</p>
              <div class="read-more">
                <a href="#">Ler mais</a>
              </div>
            </div>
          </article>
        @endforeach
      @endif
    </div>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <a href="index.html"> <h3>FLORENCE</h3> </a>
            <p>Este é o trabalho integrador de Eduarda de Almeida Oliveira do terceiro ano de informática do IFMG Campus Formiga.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p><strong> Eduarda de Almeida Oliveira </strong><br>
              Formiga, MG<br>
              Brasil <br>
              <strong>Email:</strong> dudaoliveiraalmeida07@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.instagram.com/duda0oliv/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/eduarda-oliveira-72a730277/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FLORENCE</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('tema/tema/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('tema/tema/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{('tema/tema/assets/js/main.js')}}"></script>

</body>

</html>
