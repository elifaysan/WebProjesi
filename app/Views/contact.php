<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>bizeulasin</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css') ?>" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="<?= base_url('css/slick-theme.css') ?>" />
  <!-- font awesome style -->
  <link href="<?= base_url('css/font-awesome.min.css') ?>" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url('css/responsive.css') ?>" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="<?= base_url('index') ?>">
              dogal incir
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('/') ?>">Giriş</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('about') ?>">Hakkımızda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('uruncesitleri') ?>">Ürünlerimiz</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('kampany') ?>">Kampanya</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('duyurular') ?>">Duyurular</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('testimonial') ?>">Bilgilendirme</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('contact') ?>">Bize Ulaşın</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('sepet') ?>">Sepet</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin') ?>">Admin</a>
  </li>
</ul>


              <div class="quote_btn-container">
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="" aria-hidden="true"></i>
                  </button>
                </form>
                <a href="">
                  <i class="" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>


    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
                  <div class="form_container">
                      <div class="heading_container">
                          <h2>
                              sikayet ve Öneri Formu
                          </h2>
                      </div>
                      <form action="mailto:customer-support@aysandogalincir.com" method="POST" enctype="multipart/form-data">
                          <div>
                              <input type="text" name="name" placeholder="İsim Soyisim" required />
                          </div>
                          <div>
                              <input type="text" name="phone" placeholder="Telefon Numarası" required />
                          </div>
                          <div>
                              <input type="email" name="email" placeholder="Email" required />
                          </div>
                          <div>
                              <select name="complaint_type" required>
                                  <option value="" disabled selected>Şikayet veya Öneri Türü Seçin</option>
                                  <option value="complaint">Şikayet</option>
                                  <option value="suggestion">Öneri</option>
                              </select>
                          </div>
                          <div>
                              <input type="text" name="title" placeholder="Başlık" required />
                          </div>
                          <div>
                              <textarea name="message" class="message-box" placeholder="Mesaj" required></textarea>
                          </div>
                          <div class="d-flex">
                              <button type="submit">
                                  Gönder
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="col-md-6 px-0">
                  <div class="map_container">
                      <div class="map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6316.148179242835!2d28.3059816969467!3d37.67096683029691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf4a8fddfe215f%3A0x1a3aa4a18778871a!2zQm96ZG_En2FuLCBBeWTEsW4!5e0!3m2!1str!2str!4v1733664019818!5m2!1str!2str" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row info_form_social_row">
          <div class="col-md-8 col-lg-9">
            <div class="info_form">
              <form action="">
                <input type="email" placeholder="e mail">
                <button>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-lg-3">

            <div class="social_box">
              <a href="https://www.facebook.com/people/Aysandogalincir/100049204901606/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/aysandogalincir/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h4>
                Menu
              </h4>
              <div class="info_links_menu">
                <a href="<?= base_url('index') ?>">
                  giriş
                </a>
                <a href="<?= base_url('about') ?>">
                  hakkımızda
                </a>
                <a href="<?= base_url('chocolate') ?>">
                  incir çeşitlerimiz
                </a>
                <a href="<?= base_url('testimonial') ?>">
                  bilgilendirme
                </a>
                <a href="<?= base_url('contact') ?>">
                  bize ulaşın
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_insta">
              <h4>
                Instagram
              </h4>
              <div class="insta_box">
                <div class="img-box">
                  <img src="<?= base_url('images/logo.png') ?>" alt="">
                </div>
                <p>
                  
                </p>
              </div>
              <div class="insta_box">
                <div class="img-box">
                  <img src="<?= base_url('images/çatlak.png') ?>" alt="">
                </div>
                <p>
                 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_detail">
              <h4>
                isletmemiz
              </h4>
              <p class="mb-0">
                 Misyonumuz, sağlıklı yaşamı destekleyen, doğadan gelen en saf ürünleri müşterilerimize ulaştırmaktır. Her aşamasında özenle yetiştirilmiş ve el işçiliğiyle seçilmiş incirlerimiz, hem lezzet hem de sağlık açısından en yüksek standartlara sahiptir.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h4>
              Bize ulasın
            </h4>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  AYDIN
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  telefon:+90 0543 786 9430
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  aysandogalincir@hotmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end info_section -->

    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="col-md-11 col-lg-8 mx-auto">
        <p>
          &copy; <span id="displayYear"></span> 
          <a href="https://html.design/"></a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script  src="<?= base_url('js/jquery-3.4.1.min.js') ?>"></script>
  <!-- bootstrap js -->
  <script  src="<?= base_url('js/bootstrap.js') ?>"></script>
  <!-- slick slider -->
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script  src="<?= base_url('js/custom.js') ?>"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html> 