<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\catgeory As category;

class Categories extends Component
{
    use WithFileUploads;

    public $title;
    public $thumbnail;
    public $categories;

    protected $rules = [
        'title' => 'required',
        'thumbnail' => 'required'
    ];

    public function render()
    {
        return view('livewire.products.categories')->layout('layouts.app')->layoutData(['title' => 'Categories']);
    }
    public function mount(){
        $this->categories = category::all();
    }

    public function save(){
        $this->validate();
        $imageaddress = time().".".$this->thumbnail->getClientOriginalExtension();
        $this->thumbnail->storeAs('categories',$imageaddress,'public');
        $finalimageaddress = "categories/".$imageaddress;
        $category = new category;
        $category->title = $this->title;
        $category->thumbnail = $finalimageaddress;
        $category->save();
        $this->categories = category::all();
        $this->reset('title','thumbnail');
    }
    public function delete($id){
        $category = category::find($id);
        $category->delete();
        $this->categories = category::all();

    }
}
