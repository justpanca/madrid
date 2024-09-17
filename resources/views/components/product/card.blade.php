@props([
'href',
'name',
'price',
'image',
'stock'
])


    <div class="relative m-3 flex flex-wrap mx-auto justify-center">
  
      <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
        <div class="overflow-x-hidden rounded-2xl relative">
          <img class="h-80 rounded-2xl w-full object-cover" src="https://thumbs2.imgbox.com/a1/25/dYq1WB6W_t.jpeg">
          <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </p>
        </div>
        <div class="mt-4 pl-2 mb-2 flex justify-between ">
          <div>
            <p class="text-lg font-semibold text-gray-900 mb-0">{{ $name }}</p>
            <p class="text-md text-gray-800 mt-0">{{ $price }}</p>
          </div>
          <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </div>
        </div>
      </div>
  
      <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
        <div class="overflow-x-hidden rounded-2xl relative">
          <img class="h-80 rounded-2xl w-full object-cover" src="https://thumbs2.imgbox.com/79/6d/ct80mhHw_t.jpeg">
          <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </p>
        </div>
        <div class="mt-4 pl-2 mb-2 flex justify-between ">
          <div>
            <p class="text-lg font-semibold text-gray-900 mb-0">{{ $name }}</p>
            <p class="text-md text-gray-800 mt-0">{{ $price }}</p>
          </div>
          <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </div>
        </div>
      </div>
  
    </div>
  </div> --}}


<div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
    <a href="{{ $href }}">
        <img src="{{ $image }}" alt="{{ $name }}" class="h-52 w-72 object-cover rounded-t-xl" />

        <div class="px-4 py-3 w-72">
            <span class="text-gray-400 mr-3 text-xs">
                {{ $stock }}
                @if ($stock <= 12) items remaining @else left @endif </span>
                    <p class="text-lg font-bold text-black truncate block capitalize">{{ $name }}</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp. {{ $price }}</p>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
            </span>
        </div>
    </a>
</div>