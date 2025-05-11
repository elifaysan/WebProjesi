<?php

namespace App\Controllers;

class Sepet extends BaseController
{
    public function index()
    {
        $session_id = session_id();
        $db = \Config\Database::connect();
        $siparisler = $db->table('siparisler')
            ->where(['musteri_adi' => $session_id, 'durum' => 'sepet'])
            ->get()->getResultArray();

        return view('sepet', ['siparisler' => $siparisler]);
    }

    public function ekle()

    {
        if (!$this->request->is('post')) {
    return redirect()->to('/'); // veya ürün sayfası
}


        $db = \Config\Database::connect();
        $musteri_adi = session_id();
        $urun_adi = $this->request->getPost('urun_adi');
        $adet = $this->request->getPost('adet') ?? 1;
        $toplam_tutar = $this->request->getPost('toplam_tutar') ?? 0;
        $durum = 'sepet';

        if (!$urun_adi || !$toplam_tutar) {
            return $this->response->setStatusCode(400)->setBody("Eksik bilgi");
        }

        $veri = [
            'musteri_adi' => $musteri_adi,
            'urun_adi' => $urun_adi,
            'adet' => $adet,
            'toplam_tutar' => $toplam_tutar,
            'durum' => $durum
        ];

        $sonuc = $db->table('siparisler')->insert($veri);

        if ($sonuc) {
            return $this->response->setBody("OK");
        } else {
            return $this->response->setStatusCode(500)->setBody("Veritabanına ekleme başarısız");
        }
    }

    public function sil($index = null)
    {
        if (!is_null($index) && session()->has('cart')) {
            $cart = session()->get('cart');
            unset($cart[$index]);
            session()->set('cart', array_values($cart)); // indexleri düzelt
        }
        return redirect()->to(base_url('sepet'));
    }
}
