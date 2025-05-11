<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kullanıcı Yönetimi</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 40px; }
    .container {
      background: #fff; padding: 20px; max-width: 900px;
      margin: auto; border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2 { text-align: center; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background-color: #eee; }
    button {
      padding: 6px 12px; margin: 2px; border: none;
      border-radius: 4px; cursor: pointer; font-weight: bold;
    }
    .guncelle { background: #007bff; color: white; }
    .sil { background: #dc3545; color: white; }
    .dondur { background: #ffc107; color: black; }
  </style>
</head>
<body>

<div class="container">
  <h2>Kullanıcı Yönetimi</h2>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Ad Soyad</th>
        <th>Email</th>
        <th>Durum</th>
        <th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($kullanicilar)): ?>
        <?php foreach ($kullanicilar as $row): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= esc($row['ad_soyad']) ?></td>
            <td><?= esc($row['email']) ?></td>
            <td><?= $row['aktif'] ? 'Aktif' : 'Pasif' ?></td>
            <td>
              <form method="POST" action="<?= base_url('kullanici/guncelle') ?>" style="display:inline;">
                <input type="hidden" name="kullanici_id" value="<?= $row['id'] ?>" />
                <button class="guncelle">Güncelle</button>
              </form>
              <form method="POST" action="<?= base_url('kullanici/sil') ?>" style="display:inline;">
                <input type="hidden" name="kullanici_id" value="<?= $row['id'] ?>" />
                <button class="sil">Sil</button>
              </form>
              <form method="POST" action="<?= base_url('kullanici/dondur') ?>" style="display:inline;">
                <input type="hidden" name="kullanici_id" value="<?= $row['id'] ?>" />
                <button class="dondur">Hesabı Dondur</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="5">Kayıtlı kullanıcı bulunamadı.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

</body>
</html>
