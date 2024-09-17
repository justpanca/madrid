<x-button :href="route('product.create')" content="Add Product" />
@if (session()->has('message'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('message') }}
</div>
@endif
<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($products as $product)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
            <td class=" px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
            <td class="px-6 py-4 whitespace-nowrap max-w-[10rem]">
                <p class="truncate overflow-hidden text-ellipsis">{{ $product->description }}</p>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->stock }}</td>
            <td class="px-6 py-4 whitespace-nowrap">Rp. {{ $product->price }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
                <img src="{{ asset('public/products/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-20 object-contain">
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                {{-- edit button --}}
                <a href="{{ route('product.edit', $product->id) }}"
                    class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">
                    Edit
                </a>

                {{-- delete button --}}
                @if (Auth::check() && Auth::user()->role_user === "admin")
                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit"
                        class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">
                        Delete
                    </button>
                </form>
                @endif

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- <span
    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span> --}}