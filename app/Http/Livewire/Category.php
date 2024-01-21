<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $nome = "bruno maxuel";
    public function render()
    {
        return view('livewire.category');
    }
}
