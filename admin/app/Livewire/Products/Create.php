<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\category;
use App\Models\product;

class Create extends Component
{
    use WithFileUploads;
    public $title, $quantity, $description, $category, $thumbnail,$categories,$price;
    public function render()
    {
        return view('livewire.products.create')->layout('layouts.app')->layoutData(['title' => 'Add New Products']);
    }
    public function mount(){
        $this->categories = category::all();
    }
    protected $rules = [
        'title' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',
        'description' => 'nullable|string',
        'category' => 'required|exists:categories,id',
        'thumbnail' => 'required|image', // 2MB max
    ];
    public function store(){
        $this->validate();
        $imageaddress = time().".".$this->thumbnail->getClientOriginalExtension();
        $this->thumbnail->storeAs('products',$imageaddress,'public');
        $finalimageaddress = "products/".$imageaddress;

        $product = new Product();
        $product->title = $this->title;
        $product->quantity = $this->quantity;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->category_id = $this->category;
        $product->thumbnail = $imageaddress;
        $product->save();
         // Reset form
        $this->reset(['title', 'quantity', 'description', 'category', 'thumbnail']);
        session()->flash('message', 'Product successfully added!');
    }
  
}
