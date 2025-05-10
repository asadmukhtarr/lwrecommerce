<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\product;

class Products extends Component
{
    public $products;

    public function render()
    {
        return view('livewire.products.products')->layout('layouts.app')->layoutData(['title' => 'All Products']);
    }
    public function mount(){
        $this->products = product::orderby('id','desc')->get();

    }
    public function delete($id){
        $product = product::find($id);
        $product->delete();
        session()->flash('message', 'Product Deleted!');
    }

}
