<?php

namespace App\Controllers;

class Kullanicilar extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $kullanicilar = $db->table('kullanicilar')->orderBy('id', 'DESC')->get()->getResultArray();
        return view('kullanicilar', ['kullanicilar' => $kullanicilar]);
    }
}
