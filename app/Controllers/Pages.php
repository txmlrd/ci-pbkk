<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
       echo view('home');
    }

    public function about()
    {
       echo view('about');
    }

    public function contact()
    {
       echo view('contact');
    }
}
