<?php

namespace App\Controllers;

class Siparisler extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        // Durum güncelleme işlemi
        if ($this->request->getMethod() === 'post') {
            $id = (int) $this->request->getPost('siparis_id');
            $durum = '';

            if ($this->request->getPost('onayla')) {
                $durum = 'Onaylandı';
            } elseif ($this->request->getPost('faturala')) {
                $durum = 'Faturalandırıldı';
            } elseif ($this->request->getPost('kargo')) {
                $durum = 'Kargoya Verildi';
            }

            if ($durum !== '') {
                $db->table('siparisler')->where('id', $id)->update(['durum' => $durum]);
                session()->setFlashdata('mesaj', "Sipariş #$id durumu '$durum' olarak güncellendi.");
            }
            return redirect()->to(base_url('siparisler'));
        }

        $siparisler = $db->table('siparisler')->orderBy('id', 'DESC')->get()->getResultArray();
        return view('siparisler', ['siparisler' => $siparisler]);
    }
}
