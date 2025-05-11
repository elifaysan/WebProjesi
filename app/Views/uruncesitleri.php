<?php /* CodeIgniter View: uruncesitleri.php */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>doğal incir</title>

  <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url("css/slick-theme.css") ?>" />
  <link href="<?= base_url("css/font-awesome.min.css") ?>" rel="stylesheet" />
  <link href="<?= base_url("css/style.css") ?>" rel="stylesheet" />
  <link href="<?= base_url("css/responsive.css") ?>" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
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
    </div>

    <section class="chocolate_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Incir Çesitleri</h2>
      <p>
        Aysan Doğal İncir olarak, incirlerimizi farklı boyutlara göre özenle sınıflandırıyor ve sizlere sunuyoruz.
        Ürünlerimiz dört ana boyut kategorisine ayrılmaktadır: <strong>1. Boy, 2. Boy</strong> ve <strong>3. Boy</strong>.
        Her kategori, incirlerin büyüklüğüne göre sınıflandırılır ve doğallığından ödün vermeden paketlenir.
      </p>
      <p>
        Bunun yanı sıra, özel bir lezzet olarak <strong>Çatlak İncir</strong> seçeneğimiz de bulunmaktadır.
        Çatlak incirlerimiz, doğal tatlılıkları ve aromalarıyla öne çıkar ve tazeliğini koruyacak şekilde hazırlanır.
      </p>
      <p>
        Ayrıca, ürünlerimiz arasında <strong>Cevizli İncir</strong> seçeneği de yer almaktadır.
        İncirin doğal lezzetiyle cevizin eşsiz uyumu, tatlı bir atıştırmalık veya ikramlık olarak harika bir seçenektir.
        Bu lezzeti denediğinizde, doğallığın ve kalitenin bir araya geldiğini hissedeceksiniz.
      </p>
    </div>

   <div class="row chocolate_container">
  <!-- Ürünler grid yapısı için responsive şekilde tasarlandı -->
  <div class="col-sm-6 col-md-4 col-lg-3 box">
    <div class="img-box"><img src="<?= base_url("images/1.numara.png") ?>" alt=""></div>
    <div class="detail-box">
      <h6>1 Numara <span>İncir</span></h6>
      <h5>499TL</h5>
      <form class="sepet-form" method="POST" action="<?= base_url('sepet/ekle') ?>">
        <input type="hidden" name="urun" value="1 Numara İncir">
        <input type="hidden" name="fiyat" value="499">
        <input type="hidden" name="adet" value="1">
        <button type="submit">Sepete Ekle</button>
      </form>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3 box">
    <div class="img-box"><img src="<?= base_url("images/kuru-incir.png") ?>" alt=""></div>
    <div class="detail-box">
      <h6>2 Numara <span>İncir</span></h6>
      <h5>399TL</h5>
      <form class="sepet-form" method="POST" action="<?= base_url('sepet/ekle') ?>">
        <input type="hidden" name="urun" value="2 Numara İncir">
        <input type="hidden" name="fiyat" value="399">
        <input type="hidden" name="adet" value="1">
        <button type="submit">Sepete Ekle</button>
      </form>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3 box">
    <div class="img-box"><img src="<?= base_url("images/kuru incir.png") ?>" alt=""></div>
    <div class="detail-box">
      <h6>3 Numara <span>İncir</span></h6>
      <h5>299TL</h5>
      <form class="sepet-form" method="POST" action="<?= base_url('sepet/ekle') ?>">
        <input type="hidden" name="urun" value="3 Numara İncir">
        <input type="hidden" name="fiyat" value="299">
        <input type="hidden" name="adet" value="1">
        <button type="submit">Sepete Ekle</button>
      </form>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3 box">
    <div class="img-box"><img src="<?= base_url("images/ceviz2.png") ?>" alt=""></div>
    <div class="detail-box">
      <h6>Ceviz</h6>
      <h5>249TL</h5>
      <form class="sepet-form" method="POST" action="<?= base_url('sepet/ekle') ?>">
        <input type="hidden" name="urun" value="Ceviz">
        <input type="hidden" name="fiyat" value="249">
        <input type="hidden" name="adet" value="1">
        <button type="submit">Sepete Ekle</button>
      </form>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3 box">
    <div class="img-box"><img src="<?= base_url("images/çatlak.png") ?>" alt=""></div>
    <div class="detail-box">
      <h6>Çatlak <span>İncir</span></h6>
      <h5>249TL</h5>
      <form class="sepet-form" method="POST" action="<?= base_url('sepet/ekle') ?>">
        <input type="hidden" name="urun" value="Çatlak İncir">
        <input type="hidden" name="fiyat" value="249">
        <input type="hidden" name="adet" value="1">
        <button type="submit">Sepete Ekle</button>
      </form>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3 box">
    <div class="img-box"><img src="<?= base_url("images/cevizincir.png") ?>" alt=""></div>
    <div class="detail-box">
      <h6>Cevizli <span>İncir</span></h6>
      <h5>Fiyat bilgisi için</h5>
      <form class="sepet-form" method="POST" action="<?= base_url('sepet/ekle') ?>">
        <input type="hidden" name="urun" value="Cevizli İncir">
        <input type="hidden" name="fiyat" value="0">
        <input type="hidden" name="adet" value="1">
        <button type="submit">Sepete Ekle</button>
      </form>
    </div>
  </div>
</div>
