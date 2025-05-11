<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ürün Yönetimi</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 40px;
    }
    .container {
      background: #fff;
      padding: 20px;
      max-width: 900px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2 { text-align: center; }
    .form-group { margin-bottom: 15px; }
    label { display: block; font-weight: bold; }
    input, textarea, select {
      width: 100%; padding: 8px; margin-top: 5px;
      border-radius: 5px; border: 1px solid #ccc;
    }
    button {
      padding: 10px 20px;
      background: #28a745;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer; font-weight: bold;
    }
    button:hover { background: #218838; }
    .success {
      color: green;
      text-align: center;
      margin-bottom: 15px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
    }
    table, th, td { border: 1px solid #ddd; }
    th, td { padding: 10px; text-align: center; }
    th { background-color: #f0f0f0; }
    img { max-width: 60px; }
  </style>
</head>
<body>

<div class="container">
  <h2>Yeni Ürün Ekle</h2>

  <?php if (session()->getFlashdata('mesaj')): ?>
    <p class="success"><?= session()->getFlashdata('mesaj') ?></p>
  <?php endif; ?>

  <form action="<?= base_url('urunler/ekle') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group"><label>Ürün Adı:</label><input type="text" name="ad" required /></div>
    <div class="form-group"><label>Açıklama:</label><textarea name="aciklama" rows="4" required></textarea></div>
    <div class="form-group"><label>Fiyat (₺):</label><input type="number" name="fiyat" step="0.01" required /></div>
    <div class="form-group"><label>Adet:</label><input type="number" name="adet" required /></div>
    <div class="form-group"><label>Ürün Görseli:</label><input type="file" name="gorsel" accept="image/*" /></div>
    <div class="form-group">
      <label>Satış Durumu:</label>
      <select name="durum">
        <option value="acik">Satışa Açık</option>
        <option value="kapali">Satışa Kapalı</option>
      </select>
    </div>
    <button type="submit">Ürünü Ekle</button>
  </form>

  <h2>Kayıtlı Ürünler</h2>

  <?php if (!empty($urunler)): ?>
    <table>
      <tr>
        <th>ID</th><th>Ad</th><th>Açıklama</th><th>Fiyat</th>
        <th>Adet</th><th>Görsel</th><th>Durum</th>
      </tr>
      <?php foreach ($urunler as $row): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= esc($row['ad']) ?></td>
          <td><?= esc($row['aciklama']) ?></td>
          <td><?= $row['fiyat'] ?> ₺</td>
          <td><?= $row['adet'] ?></td>
          <td><img src="<?= base_url($row['gorsel']) ?>" alt="görsel"></td>
          <td><?= esc($row['durum']) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else: ?>
    <p>Henüz ürün eklenmemiş.</p>
  <?php endif; ?>
</div>

</body>
</html>
