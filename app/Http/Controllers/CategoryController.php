<?php

namespace App\Http\Controllers;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index(){ 
        $categories = $this->categoryService->searchAllCategory();
        return view('categories/index', ['categories' => $categories]);
    }
}
