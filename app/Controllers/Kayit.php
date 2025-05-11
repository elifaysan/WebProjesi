<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class Kayit extends BaseController
{
    public function index()
    {
        return view('kayit_form');
    }

    public function kayitOl()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $ad_soyad = $this->request->getPost('ad_soyad');
            $email    = $this->request->getPost('email');
            $sifre    = password_hash($this->request->getPost('sifre'), PASSWORD_DEFAULT);
            $aktif    = 1;

            $db = \Config\Database::connect();
            $builder = $db->table('kullanicilar');
            $data = [
                'ad_soyad' => $ad_soyad,
                'email' => $email,
                'sifre' => $sifre,
                'aktif' => $aktif
            ];

            if ($builder->insert($data)) {
                return redirect()->to(base_url('kayit'))->with('mesaj', 'Kayıt başarılı! Giriş sayfasına dönebilirsiniz.');
            } else {
                return redirect()->to(base_url('kayit'))->with('mesaj', 'Kayıt sırasında bir hata oluştu.');
            }
        }
    }
}
