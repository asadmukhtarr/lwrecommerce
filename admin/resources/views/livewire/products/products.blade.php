<div>
    <br />
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-list"></i> All Products
        </div>
        <table class="table table-bordered table-hover table-stripped">
            <tr>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>
                    <img src="{{ asset('storage/products') }}/{{ $product->thumbnail }}" height="40px" /> {{ $product->title }}
                </td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }} Pkr</td>
                <td>{{ $product->category->title }}</td>
                <td>
                    <button class="btn btn-danger btn-sm" wire:click="delete({{ $product->id }})" wire:confirm><i class="fa fa-trash"></i></button>
                    <a href="{{ route('view.product',$product->id) }}"><button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
