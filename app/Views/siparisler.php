<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sipariş Yönetimi</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 40px; }
    .container {
      background: #fff; padding: 20px; max-width: 900px;
      margin: auto; border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2 { text-align: center; }
    .success { text-align: center; font-weight: bold; margin-bottom: 10px; color: green; }
    .error { text-align: center; font-weight: bold; margin-bottom: 10px; color: red; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background-color: #eee; }
    button {
      padding: 6px 12px; margin: 2px; border: none;
      border-radius: 4px; cursor: pointer; font-weight: bold;
    }
    .onayla { background: #28a745; color: white; }
    .faturala { background: #007bff; color: white; }
    .kargo { background: #ffc107; color: black; }
  </style>
</head>
<body>

<div class="container">
  <h2>Sipariş Yönetimi</h2>

  <?php if (session()->getFlashdata('mesaj')): ?>
    <p class="success"><?= session()->getFlashdata('mesaj') ?></p>
  <?php endif; ?>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Müşteri</th>
        <th>Ürün</th>
        <th>Adet</th>
        <th>Toplam Tutar</th>
        <th>Durum</th>
        <th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($siparisler)): ?>
        <?php foreach ($siparisler as $row): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= esc($row['musteri_adi']) ?></td>
            <td><?= esc($row['urun_adi']) ?></td>
            <td><?= $row['adet'] ?></td>
            <td><?= $row['toplam_tutar'] ?> ₺</td>
            <td><?= esc($row['durum']) ?></td>
            <td>
              <form method="POST" style="display:inline;">
                <input type="hidden" name="siparis_id" value="<?= $row['id'] ?>" />
                <button class="onayla" name="onayla">Onayla</button>
              </form>
              <form method="POST" style="display:inline;">
                <input type="hidden" name="siparis_id" value="<?= $row['id'] ?>" />
                <button class="faturala" name="faturala">Faturalandır</button>
              </form>
              <form method="POST" style="display:inline;">
                <input type="hidden" name="siparis_id" value="<?= $row['id'] ?>" />
                <button class="kargo" name="kargo">Kargoya Ver</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="7">Henüz sipariş yok.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

</body>
</html>
