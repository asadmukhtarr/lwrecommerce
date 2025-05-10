<div>
    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
    @endif
    <div class="card mt-3">
        <div class="card-header">
            <i class="fa fa-circle-plus"></i> Create New Product
        </div>
        <div class="card-body">
            <form wire:submit.prevent="store">

                <!-- Title -->
                <div class="form-group mb-3">
                    <label for="title">
                        <i class="nav-icon bi bi-tags"></i> Title
                    </label>
                    <input type="text" id="title" class="form-control" wire:model.defer="title">
                    @error('title')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quantity -->
                <div class="form-group mb-3">
                    <label for="quantity">
                        <i class="nav-icon bi bi-123"></i> Quantity
                    </label>
                    <input type="number" id="quantity" class="form-control" wire:model.defer="quantity">
                    @error('quantity')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                 <!-- price -->
                 <div class="form-group mb-3">
                    <label for="quantity">
                        <i class="nav-icon bi bi-123"></i> price
                    </label>
                    <input type="number" id="price" class="form-control" wire:model.defer="price">
                    @error('price')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group mb-3">
                    <label for="description">
                        <i class="nav-icon bi bi-file-text"></i> Description
                    </label>
                    <textarea id="description" class="form-control" wire:model.defer="description" rows="4"></textarea>
                    @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Category -->
                <div class="form-group mb-3">
                    <label for="category">
                        <i class="nav-icon bi bi-list-task"></i> Category
                    </label>
                    <select wire:model="category" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Thumbnail -->
                <div class="form-group mb-3">
                    <label for="thumbnail">
                        <i class="nav-icon bi bi-image"></i> Thumbnail
                    </label>
                    <input type="file" id="thumbnail" class="form-control" wire:model="thumbnail">
                    @error('thumbnail')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror

                    <!-- Optional: Show preview of uploaded image -->
                    @if ($thumbnail)
                        <img src="{{ $thumbnail->temporaryUrl() }}" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Save Product <i class="fa fa-spin fa-spinner" wire:loading></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
