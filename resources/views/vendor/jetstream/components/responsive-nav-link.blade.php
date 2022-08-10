@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-black text-base font-medium text-black bg-white focus:outline-none focus:text-black focus:bg-white focus:border-red-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-white hover:border-rojo focus:outline-none focus:text-rojo focus:bg-white focus:border-red-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
