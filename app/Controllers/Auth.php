<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function kayit()
    {
        return view('kayit');
    }

    public function logout()
    {
        // çıkış işlemleri burada yapılabilir
        return redirect()->to('/');
    }
}
