@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm font-regular text-red-500 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
