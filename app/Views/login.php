<h2>Kullanıcı Girişi</h2>
<form action="<?= base_url('kullanici/giris') ?>" method="post">
    <input type="text" name="kullanici" placeholder="Kullanıcı Adı" required><br>
    <input type="password" name="sifre" placeholder="Şifre" required><br>
    <input type="submit" value="Giriş Yap">
</form>
