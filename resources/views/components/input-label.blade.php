@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-primary dark:text-secondary']) }}>
    {{ $value ?? $slot }}
</label>
