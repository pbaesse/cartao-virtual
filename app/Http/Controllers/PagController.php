<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info_site;


class PagController extends Controller
{
    private $info;

    public function __construct(info_site $info){
      $this->info = $info;
   }
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

        $descr = auth()-> user()->info->descricao;
        $nome = auth()-> user()->info->nome;
        $data = auth()-> user()->info->data_nasc;
        $hob = auth()-> user()->info->hobbies;
        $cidade = auth()-> user()->info->cidade;
        return view('modelo2v', compact('descr','nome','data','hob','cidade'));
    }
}
