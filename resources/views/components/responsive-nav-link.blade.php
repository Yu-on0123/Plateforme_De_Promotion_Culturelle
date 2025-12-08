@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-4 pe-4 py-3 rounded-r-lg text-base font-medium bg-gradient-to-r from-yellow-100 to-yellow-50 text-yellow-800 border-l-4 border-yellow-500 shadow-sm transition-all duration-200 ease-in-out'
            : 'block w-full ps-4 pe-4 py-3 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="flex items-center">
        {{ $slot }}
    </span>
</a>