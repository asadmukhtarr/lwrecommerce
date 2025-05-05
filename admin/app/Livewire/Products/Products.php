<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.products.products')->layout('layouts.app')->layoutData(['title' => 'All Products']);
    }

}
