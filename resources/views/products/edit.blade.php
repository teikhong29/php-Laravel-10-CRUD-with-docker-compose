@extends('layouts')

@section('content')
    <div class="p-4 flex justify-between w-full">
        <h1 class="text-xl font-bold">Edit Product</h1>
    </div>

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PATCH')

        <div class="p-2">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="p-2">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="p-2">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01" required>
        </div>

        <button class="ms-3 bg-red-500 text-white text-black place-self-center px-3 py-2" type="submit">Update</button>
    </form>
@endsection