<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Giriş</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
  <style>
    .admin-login {
      max-width: 400px;
      margin: 100px auto;
      background: #f5f5f5;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .admin-login h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .admin-login input[type="text"],
    .admin-login input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .admin-login input[type="submit"] {
      width: 100%;
      background-color: #2e8b57;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .admin-login input[type="submit"]:hover {
      background-color: #246e46;
    }
    .mesaj {
      text-align: center;
      color: red;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="admin-login">
    <h2>Admin Giriş</h2>
    <?php if (session()->getFlashdata('hata')): ?>
      <div class="mesaj"><?= session()->getFlashdata('hata') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('admin/giris') ?>" method="POST">
      <input type="text" name="username" placeholder="Kullanıcı Adı" required />
      <input type="password" name="password" placeholder="Şifre" required />
      <input type="submit" value="Giriş Yap" />
    </form>
  </div>
</body>
</html>
