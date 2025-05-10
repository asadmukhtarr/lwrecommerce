<div>
<div class="container mt-4">
    <div class="row">
        <!-- Form Column -->
        <div class="col-lg-4">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-plus-circle"></i> Add New Customer <i class="fa fa-spinner fa-spin" wire:loading></i> 
                </div>
                <form wire:submit.prevent="store" class="card-body">
                    <div class="mb-2">
                        <label>Name</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-2">
                        <label>Email</label>
                        <input type="email" class="form-control" wire:model="email">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-2">
                        <label>WhatsApp</label>
                        <input type="text" class="form-control" wire:model="whatsapp">
                        @error('whatsapp') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-2">
                        <label>Address</label>
                        <textarea class="form-control" wire:model="address"></textarea>
                        @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button class="btn btn-primary">Add Customer</button>
                </form>
            </div>
        </div>

        <!-- Customers Table -->
        <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-users"></i> All Customers
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>WhatsApp</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->whatsapp }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>
                                        <button wire:click="delete({{ $customer->id }})" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure to delete?')">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No customers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

</div>