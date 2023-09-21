<a {{ $attributes->merge(['class' => 'cursor-pointer inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-green-500 dark:text-gray-800 uppercase tracking-widest hover:bg-green-700 dark:hover:bg-green-300 focus:bg-green-700 dark:focus:bg-green-400 active:bg-green-900 dark:active:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
