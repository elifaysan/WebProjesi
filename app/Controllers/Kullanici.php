<?php

namespace App\Controllers;

class Kullanici extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function giris()
    {
        $kullanici = $this->request->getPost('kullanici');
        $sifre     = $this->request->getPost('sifre');

        if ($kullanici === 'admin' && $sifre === '1234') {
            session()->set('giris', true);
            return redirect()->to(base_url('profil'));
        } else {
            return redirect()->to(base_url('login'))->with('hata', 'Hatalı giriş');
        }
    }

    public function kayit()
    {
        return view('kayit');
    }

    public function kayitol()
    {
        $kullanici = $this->request->getPost('kullanici');
        $sifre     = $this->request->getPost('sifre');

        echo "Kayıt başarılı: $kullanici";
    }

    public function cikis()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
