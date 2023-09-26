<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return view('home');
    }
    public function ab()
    {
        return view('about');
    }
}
