@props([
'href',
'content'
])

<a href="{{ $href }}"
    class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white hover:bg-violet-500 hover:text-gray-100">
    {{ $content }}
</a>