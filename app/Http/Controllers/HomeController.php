<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info_site;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registro =  auth()-> user()->info;
        if ($registro) {
        return view('home');
            
        }else{
          return redirect('/admin/perfil');  
        }
    }
}
