<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Files\UploadedFile;

class AdminUrunler extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $urunler = $db->table('urunler')->get()->getResultArray();
        return view('urunler', ['urunler' => $urunler]);
    }

    public function ekle()
    {
        helper(['form', 'url']);
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

        $ad = $request->getPost('ad');
        $aciklama = $request->getPost('aciklama');
        $fiyat = $request->getPost('fiyat');
        $adet = $request->getPost('adet');
        $durum = $request->getPost('durum');
        $gorselYolu = '';

        $file = $request->getFile('gorsel');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $file->move('uploads/');
            $gorselYolu = 'uploads/' . $file->getName();
        }

        $veri = [
            'ad' => $ad,
            'aciklama' => $aciklama,
            'fiyat' => $fiyat,
            'adet' => $adet,
            'gorsel' => $gorselYolu,
            'durum' => $durum
        ];

        if ($db->table('urunler')->insert($veri)) {
            return redirect()->to(base_url('urunler'))->with('mesaj', 'Ürün başarıyla eklendi!');
        } else {
            return redirect()->to(base_url('urunler'))->with('mesaj', 'Hata oluştu!');
        }
    }
}
