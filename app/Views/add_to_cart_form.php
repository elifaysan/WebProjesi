<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<form method="post" action="<?= site_url('cart/add') ?>">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="name" value="Ürün Adı">
    <input type="hidden" name="price" value="99.99">
    
    <label for="quantity">Adet:</label>
    <input type="number" name="quantity" id="quantity" value="1" min="1">
    
    <button type="submit">Sepete Ekle</button>
</form>
