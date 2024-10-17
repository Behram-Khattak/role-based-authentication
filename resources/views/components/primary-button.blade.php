<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 border rounded-md font-semibold text-sm uppercase tracking-widest hover:bg-yale dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-yale focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
