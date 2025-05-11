<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 40px;
    }
    .container {
      background: #fff;
      padding: 30px;
      max-width: 600px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      border: none;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    .sifre {
      background-color: #007bff;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Profil Sayfası</h2>

  <form method="POST" action="<?= base_url('profil/guncelle') ?>">
    <label>Ad Soyad</label>
    <input type="text" name="ad_soyad" value="<?= $admin['ad_soyad'] ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $admin['email'] ?>" required>

    <button type="submit">Bilgileri Güncelle</button>
  </form>

  <form method="POST" action="<?= base_url('profil/sifre') ?>">
    <label>Yeni Şifre</label>
    <input type="password" name="yeni_sifre" placeholder="Yeni şifre girin" required>
    <button type="submit" class="sifre">Şifreyi Güncelle</button>
  </form>
</div>
</body>
</html>
