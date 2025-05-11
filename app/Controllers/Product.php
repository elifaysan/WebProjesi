<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['urunler'] = $model->findAll();
        return view('urunler_listesi', $data);
    }
}