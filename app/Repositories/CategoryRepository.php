<?php
namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryRepository{
    protected $modelCategory;
    public function __construct(Category $modelCategory)
    {
        $this->modelCategory = $modelCategory;
    }

    // public function buscarClientePorId($request){
    //     return Cliente::where('user_id', Auth::id())->find($request->id);
    // }
    // public function pesquisarCliente($request){
    //     $query = $request->input('query');
    //     return Cliente::where('user_id', Auth::id())->where('nome', 'LIKE', "%$query%")->orderby('id', 'desc')->get();
    // }

    public function searchAllCategory(){
        return Category::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
    }
    // public function adicionarCliente($request){
    //     $cliente            = new Cliente();
    //     $cliente->user_id   = Auth::id(); 
    //     $cliente->nome      = $request->nome;
    //     $cliente->telefone  = $request->telefone;
    //     $cliente->endereco  = $request->endereco;
    //     $cliente->bairro    = $request->bairro;
    //     $cliente->cidade    = $request->cidade;
    //     if($cliente->save()){
    //         return true;
    //     }
    // }
}