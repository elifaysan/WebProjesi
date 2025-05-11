<h2>Sepetiniz</h2>
<?php
$cart = session()->get('cart') ?? [];
if (empty($cart)):
    echo "<p>Sepet boş.</p>";
else:
    foreach ($cart as $item):
        echo "<p>{$item['name']} - {$item['quantity']} adet - ₺{$item['price']}</p>";
    endforeach;
endif;
?>
