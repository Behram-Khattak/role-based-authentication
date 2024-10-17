@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-yale dark:focus:border-yale focus:ring-yale dark:focus:ring-yale-600 rounded-md shadow-sm']) }}>
