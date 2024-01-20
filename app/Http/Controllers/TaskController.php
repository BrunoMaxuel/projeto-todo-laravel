<?php
namespace App\Http\Controllers;

use App\Services\TaskService;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(TaskService $taskService) 
    {
        $this->taskService = $taskService;
    }

    public function index(){
        $tasks = $this->taskService->searchAllTasks();
        return view('tasks/index', ['tasks'=>$tasks]);
    }
}
