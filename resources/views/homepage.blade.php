@extends('partials.layouts.app')

@section('container')

@include('partials.pages.homepage.header')

<main class="flex-grow">
    {{-- homepage products --}}
    @if ( Request::is('/') )
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-1 my-5">

            @foreach ($products as $product)
            <x-product.card :href="route('detail.product', $product)" :name="$product->name" :price="$product->price"
                :stock="$product->stock"
                :image="$product->image == null ? 'https://source.unsplash.com/600x400?product&random=' . $product->id : asset('storage/products/' . $product->image)" />
            @endforeach

        </div>
    </div>

    {{-- detail product --}}
    @elseif ( Route::is('detail.product') )
    @include('partials.pages.dashboard.product.show')

    @elseif( Route::is('cart.index') )
    @include('partials.pages.homepage.cart.index')
    @endif
</main>

@include('partials.pages.homepage.footer')

@endsection