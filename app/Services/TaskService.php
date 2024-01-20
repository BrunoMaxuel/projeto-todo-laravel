<?php
namespace App\Services;

use App\Repositories\ProdutoRepository;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Auth;

class TaskService{

    protected $taskRepository;
    public function __construct(TaskRepository $taskRepository){
        $this->taskRepository = $taskRepository;
    }

    public function searchAllTasks(){
        return $this->taskRepository->searchAllTasks();
    }

}