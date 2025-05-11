<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'urunler';
    protected $primaryKey = 'id';
    protected $allowedFields = ['urun_adi', 'fiyat', 'aciklama', 'stok'];
}