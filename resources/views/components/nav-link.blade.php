<a {{ $attributes }} class="{{ $active ? 'bg-red-500 text-white' : 'text-gray-400 hover:bg-red-500 hover:text-white' }} py-2 px-3 rounded-lg transition-all ease-in-out duration-150"
    aria-current="page">
    {{ $slot }}
</a>