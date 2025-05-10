<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\product;

class View extends Component
{
    public $product;
    public $title;
    public function render()
    {
        return view('livewire.products.view')->layout('layouts.app')->layoutData(['title' => $this->title]);
    }
    public function mount($id){
        $this->product = product::find($id);
        $this->title = $this->product->title;
    }
}
