@extends('layouts')

@section('content')
    <div class="p-4 flex justify-between w-full">
        <h1 class="text-xl font-bold">Products List</h1>
        <p>
            <a class="ms-3 bg-sky-500 text-white text-black px-3 py-2" href="{{ route('products.create') }}">Create Product</a>
        </p>
    </div>
    <div class="p-4 flex justify-between w-full">
        <table class="border-collapse border border-slate-400 ...">
            <thead>
                <tr>
                    <th class="p-2 border border-slate-300 ...">Name</th>
                    <th class="p-2 border border-slate-300 ...">Description</th>
                    <th class="p-2 border border-slate-300 ...">Price</th>
                    <th class="p-2 border border-slate-300 ...">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="p-2 border border-slate-300 ...">{{ $product->name }}</td>
                    <td class="p-2 border border-slate-300 ...">{{ $product->description }}</td>
                    <td class="p-2 border border-slate-300 ...">{{ $product->price }}</td>
                    <td class="p-2 border border-slate-300 ...">
                        <div class="p-2 flex">
                            <div class="flex justify-end">
                                <a class="ms-3 bg-sky-500 text-white text-black px-3 py-2 h-10" href="{{ route('products.edit', $product) }}">Edit</a>
                                <form method="POST" action="{{ route('products.destroy', $product) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ms-3 bg-red-500 text-white text-black place-self-center px-3 py-2" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection