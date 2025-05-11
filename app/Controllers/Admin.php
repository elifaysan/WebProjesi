<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin_giris');
    }

    public function giris()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'admin' && $password === '1234') {
            session()->set('admin', $username);
            return redirect()->to(base_url('adminpanel'));
        } else {
            return redirect()->to(base_url('admin'))->with('hata', 'Kullanıcı adı veya şifre yanlış!');
        }
    }
}
