<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sepetim</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eaeaea;
      margin: 0;
      padding: 0;
    }
    .sepet-container {
      max-width: 800px;
      margin: 80px auto;
      background: #f5f5f5;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .sepet-container h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table th, table td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    table th {
      background-color: #2e8b57;
      color: white;
    }
    table tr:hover {
      background-color: #f1f1f1;
    }
    .bos-sepet {
      text-align: center;
      padding: 20px;
      color: #777;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="sepet-container">
    <h1>Sepetiniz</h1>

    <?php if (count($siparisler) > 0): ?>
      <table>
        <tr>
          <th>Ürün Adı</th>
          <th>Adet</th>
          <th>Toplam Tutar (TL)</th>
        </tr>
        <?php foreach ($siparisler as $siparis): ?>
          <tr>
            <td><?= esc($siparis['urun_adi']) ?></td>
            <td><?= $siparis['adet'] ?></td>
            <td><?= number_format($siparis['toplam_tutar'], 2) ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php else: ?>
      <div class="bos-sepet">Sepetiniz şu anda boş.</div>
    <?php endif; ?>
  </div>
</body>
</html>
