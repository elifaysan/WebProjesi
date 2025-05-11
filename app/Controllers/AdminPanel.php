<?php

namespace App\Controllers;

class AdminPanel extends BaseController
{
    public function index()
    {
        if (!session()->has('admin')) {
            return redirect()->to(base_url('admin'));
        }

        $admin = session()->get('admin');
        return view('adminpanel', ['admin' => $admin]);
    }
}
