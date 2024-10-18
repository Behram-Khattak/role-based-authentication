@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-secondary dark:bg-gray-900 dark:text-gray-300 focus:border-primary dark:focus:border-secondary focus:ring-primary dark:focus:ring-primary-600 rounded-md shadow-sm']) }}>
