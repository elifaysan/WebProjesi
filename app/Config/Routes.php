<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 🌐 Anasayfa
$routes->get('/', 'AnaSayfa::index');

// 👥 Kullanıcı Giriş/Kayıt
$routes->get('login', 'Kullanici::login');
$routes->post('kullanici/giris', 'Kullanici::giris');
$routes->get('kayit', 'Kayit::index');
$routes->post('kayit/kayitOl', 'Kayit::kayitOl');
$routes->get('logout', 'Kullanici::cikis');

// 📄 Sabit Sayfalar (menüdeki)
$routes->get('about', 'Test::about');
$routes->get('kampany', 'Test::kampanya');
$routes->get('bilgilendirme', 'Test::bilgilendirme');
$routes->get('iletisim', 'Test::iletisim');

// 🛍️ Ürünler - Müşteri tarafı
$routes->get('uruncesitleri', 'Uruncesitleri::index');


// 🛒 Sepet
$routes->get('sepet', 'Sepet::index');
$routes->post('sepet/ekle', 'Sepet::ekle');      // AJAX gibi
$routes->get('sepet/sil/(:num)', 'Sepet::sil/$1');

// 👤 Profil
$routes->get('profil', 'Profil::index');
$routes->post('profil/guncelle', 'Profil::guncelle');
$routes->post('profil/sifre', 'Profil::sifre');

// 📦 Sipariş
$routes->match(['get', 'post'], 'siparisler', 'Siparisler::index');

// 👥 Kullanıcı Yönetimi (admin panel)
$routes->get('kullanicilar', 'Kullanicilar::index');

// 🧑‍💼 Admin Giriş ve Panel
$routes->get('admin', 'Admin::index');
$routes->post('admin/giris', 'Admin::giris');
$routes->get('adminpanel', 'AdminPanel::index');

// 🛠️ Admin Ürün Yönetimi
$routes->get('uruncesitleri', 'Uruncesitleri::index'); // Müşteri sayfası
$routes->get('admin/urunler', 'AdminUrunler::index');  // Admin paneli
$routes->post('admin/urunler/ekle', 'AdminUrunler::ekle');

$routes->get('duyurular', 'Duyurular::index');
$routes->get('testimonial', 'Testimonial::index');
$routes->get('contact', 'Contact::index');
$routes->post('sepet/ekle', 'Sepet::ekle');
$routes->match(['get', 'post'], 'sepet/ekle', 'Sepet::ekle');



