<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cart extends Controller
{
    public function add()
    {
        $session = session();
        $request = service('request');

        $product = [
            'id'       => $request->getPost('id'),
            'name'     => $request->getPost('name'),
            'price'    => $request->getPost('price'),
            'quantity' => $request->getPost('quantity')
        ];

        // Var olan sepeti al (yoksa boş dizi)
        $cart = $session->get('cart') ?? [];

        // Ürün sepette varsa miktarını artır
        if (isset($cart[$product['id']])) {
            $cart[$product['id']]['quantity'] += $product['quantity'];
        } else {
            $cart[$product['id']] = $product;
        }

        // Güncellenmiş sepeti sakla
        $session->set('cart', $cart);

        $session->setFlashdata('success', 'Ürün sepete başarıyla eklendi.');
        return redirect()->back();
    }
}
