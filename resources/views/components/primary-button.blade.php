<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-blue-200 focus:bg-gray-700 dark:focus:bg-blue-200 active:bg-gray-900 dark:active:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:ring-offset-2 dark:focus:ring-offset-blue-200 transition ease-in-out duration-150 hover:text-black']) }}>
    {{ $slot }}
</button>
