<?php

namespace App\Livewire\Orders;

use Livewire\Component;

class Neworder extends Component
{
    public function render()
    {
        return view('livewire.orders.neworder')->layout('layouts.app')->layoutData(['title' => 'New Orders']);;
    }
}
