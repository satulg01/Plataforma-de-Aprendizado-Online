<a {{ $attributes->merge(['class' => 'cursor-pointer inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-blue-500 dark:text-gray-800 uppercase tracking-widest hover:bg-blue-700 dark:hover:bg-blue-300 focus:bg-blue-700 dark:focus:bg-blue-400 active:bg-blue-900 dark:active:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
