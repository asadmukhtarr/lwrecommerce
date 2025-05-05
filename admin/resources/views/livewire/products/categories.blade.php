<div>
   <div class="row mt-3">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    <div class="col-lg-4">
        <form wire:submit="save">
            <div class="card rounded-0">
                <div class="card-header">
                    <i class="nav-icon bi bi-plus-circle"></i> Create Category
                    <div class="float-end">
                        <i class="fa fa-spinner fa-spin" wire:loading></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> <i class="nav-icon bi bi-tags"></i> Title</label>
                        <input type="text" class="form-control" wire:model="title">
                        @error('title')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for=""> <i class="nav-icon bi bi-image"></i> Thumbnail</label>
                        <input type="file" wire:model="thumbnail"  />
                        @error('thumbnail')
                        <font color="red">{{ $message }}</font>
                        @enderror
                        @if ($thumbnail)
                            Photo Preview: <br />
                            <img src="{{ $thumbnail->temporaryUrl() }}" height="100px">
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger btn-sm float-end" type="submit">
                        <i class="nav-icon bi bi-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-list"></i> Categories
            </div>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Sr</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td> <img src="{{ asset('storage') }}/{{ $category->thumbnail }}" height="40px" /> {{ ucfirst($category->title) }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $category->id }})" wire:confirm><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
   </div>
</div>
