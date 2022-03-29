<?php

namespace App\Controllers;

use App\Controllers\Controller;

class Home extends Controller
{


    public function index()
    {

        $this->view('home');
    }

    public function category()
    {
        $this->view('category');
    }


    public function detailes()
    {
        $this->view('detailes');
    }

    public function checkout()
    {
        $this->view('checkout');
    }
    public function stepper()
    {
        $this->view('stepper');
    }
}
