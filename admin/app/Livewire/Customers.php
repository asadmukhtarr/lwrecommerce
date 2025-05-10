<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customer;

class Customers extends Component
{
    public $customers;
    public $name, $email, $whatsapp, $address;

    public function render()
    {
        $this->customers = customer::latest()->get(); // Object-based Eloquent query
        return view('livewire.customers')->layout('layouts.app')->layoutData(['title' => 'All Customers']);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'address' => 'required',
        ]);

        $customer = new customer();
        $customer->name = $this->name;
        $customer->email = $this->email;
        $customer->whatsapp = $this->whatsapp;
        $customer->address = $this->address;
        $customer->save();

        session()->flash('message', 'Customer added successfully!');

        // Clear form fields
        $this->reset(['name', 'email', 'whatsapp', 'address']);
    }

    public function delete($id)
    {
        $customer = customer::find($id);
        if ($customer) {
            $customer->delete();
            session()->flash('message', 'Customer deleted successfully!');
        }
    }
}
