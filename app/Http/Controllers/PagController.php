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
        return redirect('/login');
    }
    public function perfil()
    {
        $user= auth()->user();
        if ($user) {
            $registro = auth()->user()->info;
            if ($registro) {
               $id_user = auth()-> user()->id;
               return view('Admin.perfil.perfil', compact('id_user'));
            }else{
               $id_user = auth()-> user()->id;
               return view('Admin.perfil.dados', compact('id_user'));
           }
        }else{
            return redirect('/login');
        }
    }
    public function temas()
    {
        return view('Admin.config.temas');
    }
    public function plugins()
    {
        return view('Admin.config.plugins');
    }
    public function settings()
    {
        return view('Admin.config.settings');
    }
    public function modeloteste1()
    {
        return view('Admin.modelos.modelo1v');
    }
    public function modeloteste2()
    {
       $registro =  auth()-> user()->info;
       if($registro){
        $descr = auth()-> user()->info->descricao;
        $nome = auth()-> user()->info->nome;
        $data = auth()-> user()->info->data_nasc;
        $hob = auth()-> user()->info->hobbies;
        $cidade = auth()-> user()->info->cidade;
        $dat = date("d/m/Y", strtotime($data));
        return view('Admin.modelos.modelo2v', compact('descr','nome','dat','hob','cidade'));
       }else{
        return redirect('/admin/perfil');
       }
    }
}
