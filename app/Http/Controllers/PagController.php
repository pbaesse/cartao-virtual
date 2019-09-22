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
    public function modeloteste()
    {
    	return view('modeloinicial');
    }
}
