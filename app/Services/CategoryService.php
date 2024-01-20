<?php
namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryService{
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function searchAllCategory(){
        return $this->categoryRepository->searchAllCategory();
    }

    // public function pesquisarCliente($request){
    //     return $this->repositorioCliente->pesquisarCliente($request);
    // }
    // public function editarCliente($request){
        
    //     $validator = Validator::make($request->all(), [
    //         'nome' => 'required',
    //     ], [
    //         'nome.required' => 'Por favor, preencha o campo nome.',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Erro na validação',
    //             'errors' => $validator->errors()
    //         ]);
    //     }
        
    //     $cliente = $this->repositorioCliente->buscarClientePorId($request);
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
    // public function adicionarCliente($request){
        
    //     $validator = Validator::make($request->all(), [
    //         'nome' => 'required',
    //     ], [
    //         'nome.required' => 'Por favor, preencha o campo nome.',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Erro na validação',
    //             'errors' => $validator->errors()
    //         ]);
    //     }
    //     if($this->repositorioCliente->adicionarCliente($request)){
    //         return true;
    //     }
    // }
    // public function excluirCliente($request){
    //     if($request->id != null){
    //         $cliente = $this->repositorioCliente->buscarClientePorId($request);
    //         if($cliente->delete()){
    //             return true;
    //         }
    //     }
    // }
}