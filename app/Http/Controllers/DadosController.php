<?php
//Controller dos dados que estarão da página do usuário
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\info_site;

class DadosController extends Controller
{
   private $infos;


   public function __construct(info_site $infos){

    $this->infos = $infos;
   }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        //$infosite = $this->info->all();

        //return view('index', compact('infosite'));

    public function index()
    {
        $login = auth()->user();
        if ($login) {
          $id_user = auth()-> user()->id;
           $registro =  auth()-> user()->info;
              if ($registro){
              return redirect('/admin');
             }else{
              return view('dados', compact('id_user'));
             }
       }else{
            return redirect('/login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$info = auth()-> user();
        $id = $info ? $info->id : 0;
        return view('dados_users', compact('id'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $users = auth()->user()->info;
        $dados = $request->except('_token');

        /*$dados['imagem'] = $users->imagem;
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
           if ($users->img) 
               $name = $users->img;
           else
               $name = id.kebab_case($user->email);

           $extenstion = $request->img->extension();
           $nameFile = "{$name}.{$extension}";

           }
           dd($nameFile);*/
        $registro =  auth()-> user()->info;
        if ($registro){
            return redirect('/admin');
        }else{
            $insert = $this->infos->insert($dados);
            return redirect('/admin');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    

}
