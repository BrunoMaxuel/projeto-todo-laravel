<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use App\Services\ProdutoService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(ProdutoService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index(){
        $tasks = $this->taskService->searchAllTasks();
        return view('tasks/index', ['tasks'=>$tasks]);
    }

    public function editarView(Request $request){
        return $this->produtoService->edit($request);
    }

    public function produtosViewAdicionar(){
        return view('produto.adicionar');
    }

    public function buscarProdutoPorId(Request $request){
        return $this->produtoService->buscaParaExclusao($request);
    }
    public function excluirProduto(Request $request) {
        $this->produtoService->excluirProduto($request);
        return redirect()->route('produto.index');
    }

    public function novoProduto(ProdutoRequest $request){
        return $this->produtoService->adicionarProduto($request);
    }

    public function editarProduto(ProdutoRequest $request){
        return $this->produtoService->editarProduto($request);
    }

    public function search(Request $request){
        $query = $request->input('query');

       if($query != null){
            $produtos = Produto::where('user_id', Auth::id())->where('nome', 'LIKE', "%$query%")
            ->orWhere('codigo_barras', 'LIKE', "%$query%")->orderby('id', 'desc')->get();
            return view('produto/index', ['produtos' => $produtos]);
       }else{
            $produtos = Produto::where('user_id', Auth::id())->get();
            return view('produto/index', ['produtos' => $produtos]);
       }
    }
}
