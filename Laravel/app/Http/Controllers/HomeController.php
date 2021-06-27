<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexClient()
    {
        return view('orcamento.index-client');
    }

    /* 
    public function index()
    {
        return view('home');
    } 
    */
}