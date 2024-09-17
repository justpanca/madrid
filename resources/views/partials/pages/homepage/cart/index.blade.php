{{-- @dd($carts[0]->product) --}}
<div class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                                <th class="text-left font-semibold"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $total_price = 0;
                            @endphp

                            @if($carts->count() != null)
                            @foreach ($carts as $cart => $value)
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4"
                                            src="{{ asset('storage/app/public/products/' . $value->product->image) }}"
                                            alt="Product image">
                                        <span class="font-semibold">{{ $value->product->name }}</span>
                                    </div>
                                </td>
                                <td class="py-4">Rp. {{ $value->product->price }}</td>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <div id="amount" class="w-28 bg-white rounded-md shadow-lg z-10">
                                            <form action="{{ route('cart.update', $value->id) }}" method="post"
                                                class="flex items-center justify-center p-2">
                                                @method('patch')
                                                @csrf
                                                <input type="number" name="quantity"
                                                    class="w-full rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent"
                                                    value="{{ $value->quantity }}">
                                                <button type="submit" class="">
                                                    ✅
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">Rp. {{ $value->product->price * $value->quantity }}</td>
                                <td class="py-4">
                                    <form action="{{ route('cart.destroy', $value->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit">
                                            ❌
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                            $total_price += $value->product->price * $value->quantity
                            @endphp

                            @endforeach
                            @endif

                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>
                            Rp. {{ $total_price }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>-</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>-</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold">Rp. {{ $total_price }}</span>
                    </div>

                    @can('IsUser')
                    <form action="" method="post">
                        @csrf
                        <button type="submit"
                            class="bg-gray-900 text-white py-2 px-4 rounded-lg mt-4 w-full hover:bg-gray-800"
                            @if($carts->count() < 1) disabled @endif>Checkout</button>
                    </form>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>