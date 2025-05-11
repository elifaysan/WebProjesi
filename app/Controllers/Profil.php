<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Database;

class Profil extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $admin = $db->table('adminler')->where('id', 1)->get()->getRowArray();

        if ($admin) {
            return view('profil', ['admin' => $admin]);
        } else {
            return "Admin bilgisi bulunamadı.";
        }
    }

    public function guncelle()
    {
        if ($this->request->getMethod() === 'post') {
            $ad_soyad = $this->request->getPost('ad_soyad');
            $email    = $this->request->getPost('email');

            $db = \Config\Database::connect();
            $builder = $db->table('adminler');

            $builder->where('id', 1);
            $builder->update([
                'ad_soyad' => $ad_soyad,
                'email'    => $email
            ]);

            return redirect()->to(base_url('profil'))->with('mesaj', 'Bilgiler güncellendi.');
        }
    }

    public function sifre()
    {
        if ($this->request->getMethod() === 'post') {
            $yeniSifre = $this->request->getPost('yeni_sifre');
            $hashliSifre = password_hash($yeniSifre, PASSWORD_DEFAULT);

            $db = \Config\Database::connect();
            $builder = $db->table('adminler');

            $builder->where('id', 1);
            $builder->update([
                'sifre' => $hashliSifre
            ]);

            return redirect()->to(base_url('profil'))->with('mesaj', 'Şifre başarıyla güncellendi.');
        }
    }
}
