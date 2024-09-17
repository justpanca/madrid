<div class="bg-white rounded-lg shadow relative m-10">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Edit Product
        </h3>

    </div>

    <div class="p-6 space-y-6">
        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="grid grid-cols-1 mb-5">
                <div class="col-span-6 sm:col-span-3">
                    <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Product Name</label>
                    <input type="text" name="name" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Product name" value="{{ $product->name }}" autofocus />
                    @error('name')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
            </div>

            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="stock" class="text-sm font-medium text-gray-900 block mb-2">Stock</label>
                    <input type="number" name="stock" id="stock"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Stock" value="{{ $product->stock }}" />
                    @error('stock')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Price</label>
                    <input type="number" name="price" id="price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Rp. xxx" value="{{ $product->price }}" />
                    @error('price')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-span-full">
                    <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Product
                        Details</label>
                    <textarea name="description" id="description" rows="6"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
                        placeholder="Product details">{{ $product->description }}</textarea>
                    @error('description')
                    <div class="description">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-span-full md:col-span-3 lg:col-span-2 mb-3">

                    <div class="mx-auto max-w-xs">
                        <input type="hidden" name="oldImage" value="{{ $product->image }}">
                        @if ( $product->image )
                        <img src="{{ asset('public/products/' . $product->image) }}" alt="{{ $product->name }}"
                            class="img-preview mt-4 mx-auto max-h-40" />
                        @else
                        <img src="" alt="" class="img-preview mt-4 mx-auto max-h-40" />
                        @endif
                        <label for="image" class="mb-1 block text-sm font-medium text-gray-700">Product Image</label>
                        <input type="file" name="image" id="image"
                            class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60"
                            onchange="previewImage()" />
                    </div>
                    @error('image')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
            </div>

            <div class="p-6 border-t border-gray-200 rounded-b text-center">
                <button type="submit"
                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Update product
                </button>
            </div>
        </form>
    </div>


</div>

<script>
    function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>