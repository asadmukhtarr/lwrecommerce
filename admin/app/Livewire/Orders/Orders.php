<?php

namespace App\Livewire\Orders;

use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        return view('livewire.orders.orders')->layout('layouts.app')->layoutData(['title' => 'Orders History']);;
    }
}
