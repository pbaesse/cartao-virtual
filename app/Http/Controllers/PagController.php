<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagController extends Controller
{
    public function inicio()
    {
    	return view('welcome');
    }
    public function escolha()
    {
    	return view('escolha_modelo');
    }
    public function modeloteste1()
    {
    	return view('modelo1v');
    }
    public function modeloteste2()
    {
        return view('modelo2v');
    }
}
