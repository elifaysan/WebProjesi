<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Admin Paneli</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .admin-panel {
      max-width: 600px;
      margin: 100px auto;
      background: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .admin-panel h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    .admin-panel ul {
      list-style: none;
      padding: 0;
    }

    .admin-panel ul li {
      margin-bottom: 15px;
    }

    .admin-panel ul li a {
      display: block;
      padding: 10px 15px;
      background-color: #2e8b57;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
      text-align: center;
    }

    .admin-panel ul li a:hover {
      background-color: #246e46;
    }
  </style>
</head>
<body>
  <div class="admin-panel">
    <h1>Admin Paneline Hoş Geldiniz, <?= esc($admin) ?>!</h1>
    <ul>
      <li><a href="<?= base_url('admin/urunler') ?>">Ürün Yönetimi</a></li>

      <li><a href="<?= base_url('siparisler') ?>">Sipariş Yönetimi</a></li>
      <li><a href="<?= base_url('kullanicilar') ?>">Kullanıcı Yönetimi</a></li>
      <li><a href="<?= base_url('profil') ?>">Profil</a></li>
      <li><a href="<?= base_url('logout') ?>">Çıkış Yap</a></li>
    </ul>
  </div>
</body>
</html>
