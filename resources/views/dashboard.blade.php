@extends('partials.layouts.app')

@section('container')

<!-- page -->
<main class="min-h-screen w-full bg-gray-100 text-gray-700" id="layout">

    @include('partials.pages.dashboard.header')

    <div class="flex">
        <!-- aside -->
        @include('partials.pages.dashboard.aside')

        <!-- main content page -->
        <div class="w-full p-4">
            {{-- dashboard page --}}
            @if ( Request::is('dashboard') )
            @include('partials.pages.dashboard.dashboard_page')

            {{-- product page --}}
            @elseif ( Request::is('dashboard/product') )
            @include('partials.pages.dashboard.product.index')

            {{-- product create --}}
            @elseif ( Request::is('dashboard/product/create') )
            @include('partials.pages.dashboard.product.create')

            {{-- product edit --}}
            @elseif ( Route::is('product.edit') )
            @include('partials.pages.dashboard.product.edit')

            {{-- transaction page --}}
            @elseif( Request::is('dashboard/transaction') )
            @include('partials.pages.dashboard.transaction.transaction_page')
            @endif
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", () => {
            const layout = {
                asideOpen: true,
                toggleAside() {
                    this.asideOpen = !this.asideOpen;
                    document.getElementById('aside').style.display = this.asideOpen ? 'block' : 'none';
                },
            };

            document.getElementById('menu-toggle').addEventListener('click', () => {
                layout.toggleAside();
            });

        });
</script>

@endsection