@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 rounded-lg text-sm font-medium leading-5 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white shadow-sm transition-all duration-200 ease-in-out hover:from-yellow-600 hover:to-yellow-700'
            : 'inline-flex items-center px-3 py-2 rounded-lg text-sm font-medium leading-5 text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition-all duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="flex items-center">
        {{ $slot }}
    </span>
</a>