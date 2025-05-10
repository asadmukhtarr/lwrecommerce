<div>
   <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ asset('storage/products') }}/{{ $product->thumbnail }}"  />
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Product Details
                </div>
                <table class="table table-bordered table-hover table-stripped">
                    <tr>
                        <th>Title</th>
                        <td>{{ $product->title }}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{ $product->quantity }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $product->price }} Pkr</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><img src="{{ asset('storage') }}/{{ $product->category->thumbnail }}" height="40px" /> {{ $product->category->title }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td> {{ $product->description }}</td>
                    </tr>
                </table>
            </div>
        </div>
   </div>
</div>
