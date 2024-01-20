<?php
namespace App\Repositories;

use App\Models\Produto;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskRepository{
    protected $modelTask;
    public function __construct(Task $modelTask){
        $this->modelTask = $modelTask;
    }   

    public function searchAllTasks(){
        return $this->modelTask->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
    }

   
}