<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Transacao;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){ 
       $tasks = 120;
        return view('home',['tasks_completed'=>$tasks,'pending_tasks'=>$tasks,'not_completed'=>$tasks]);
    }
}
