@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'text-[#ffa51d]' : 'text-gray-300 hover:text-yellow-400' }} rounded-md px-4 py-3 text-base font-medium" aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
