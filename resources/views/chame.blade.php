<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FLORENCE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('tema/tema/assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset('tema/tema/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('tema/tema/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset('tema/tema/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('tema/tema/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('tema/tema/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('tema/tema/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset('tema/tema/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/tema/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- ====== Estilização ===== -->

  <style>
    /* Estilizando os itens puxados do banco de dados */
    .emergencia-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px; /* Espaço entre as caixinhas */
      padding: 20px;
    }
  
    .emergencia-card {
      background: #f7f7f7;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
      padding: 15px;
      text-align: center;
      width: 300px;
    }
  
    .emergencia-card h5 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }
  
    .emergencia-card p {
      font-size: 16px;
      color: #555;
      margin: 5px 0;
    }
  </style>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="{{ route('home') }}">FLORENCE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

 <!-- ======= Navbar ======= -->    
  <nav id="navbar" class="navbar">
  <ul>
    <li><a +Home</a></li>
    <li><a class= "active" href="{{ route('forum') }}">Fórum</a></li> <!--class="active"-->
    <li><a href="{{ route('chame') }}">Chame por ajuda</a></li>

    <li><a class="getstarted" href="{{ route('login') }}">Administrador</a></li> <!--class="getstarted"-->
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
            <h2>Chame por ajuda</h2>
            <p>Aqui você acha os números de delegacias da mulher e alguns outros telefones que você pode pedir ajuda.</p>
          </div>
        </div>
      </div>
 
    </section><!-- End Breadcrumbs -->

    <section id="emergencias">
      <div class="emergencia-container">
        @foreach($emergencias as $emergencia)
        <div class="emergencia-card">
          <h5>{{ $emergencia->nome }}</h5>
          <p>Telefone: {{ $emergencia->telefone }}</p>
        </div>
        @endforeach
      </div>
    </section>
    


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('tema/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{asset('tema/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('tema/tema/assets/js/main.js') }}"></script>

</body>

</html>