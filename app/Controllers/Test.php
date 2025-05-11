<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function about()
    {
        return view('about');
    }
    public function kampanya()
{
    return view('kampany');
}

public function bilgilendirme()
{
    return view('testimonial');
}

public function iletisim()
{
    return view('contact');
}
public function urunler()
{
    return view('chocolate');
}

public function admin()
{
    return view('admin');
}

}

