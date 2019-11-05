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
    public function escolha()
    {
        return view('Admin.perfil.escolha');
    }
    public function perfil()
    {
        $user= auth()->user();
        if ($user) {
            $registro = auth()->user()->info;
            if ($registro) {
               
               $descr = auth()-> user()->info->descricao;
               $nome = auth()-> user()->info->nome;
               $data = auth()-> user()->info->data_nasc;
               $hob = auth()-> user()->info->hobbies;
               $cidade = auth()-> user()->info->cidade;
               $dat = date("d/m/Y", strtotime($data));
               return view('Admin.perfil.perfil', compact('descr','nome','dat','hob','cidade'));
            }else{
               $id_user = $user->id;
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
        return view('Admin.config.config');
    }
    public function modeloteste1()
    {
        {
       $registro =  auth()-> user()->info;
       if($registro){
        $descr = auth()-> user()->info->descricao;
        $nome = auth()-> user()->info->nome;
        $data = auth()-> user()->info->data_nasc;
        $hob = auth()-> user()->info->hobbies;
        $cidade = auth()-> user()->info->cidade;
        $dat = date("d/m/Y", strtotime($data));
        return view('Admin.modelos.tema1', compact('descr','nome','dat','hob','cidade'));
       }else{
        return redirect('/admin/perfil');
       }
    }
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
        return view('Admin.modelos.tema2', compact('descr','nome','dat','hob','cidade'));
       }else{
        return redirect('/admin/perfil');
       } 
    }
   
}
