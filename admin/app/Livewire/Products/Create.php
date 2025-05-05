<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $title, $quantity, $description, $category, $thumbnail,$categories;

    public function render()
    {
        return view('livewire.products.create')->layout('layouts.app')->layoutData(['title' => 'Add New Products']);
    }
  
}
