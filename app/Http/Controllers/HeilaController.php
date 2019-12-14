<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

class HeilaController extends Controller
{
    public function home()
    {
        return view('heila.home');
    }
    public function product()
    {
        return view('heila.product');
    }
    public function contact()
    {
        return view('heila.contact');
    }
    public function order()
    {
        return view('heila.order');
    }
}
