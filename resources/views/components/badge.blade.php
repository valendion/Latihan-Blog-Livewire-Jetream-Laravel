@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'gray' => 'text-gray-500',
        'blue' => 'text-blue-500',
        'red' => 'text-red-500',
        'yellow' => 'text-yellow-500',
        default => 'text-gray-500',
    };

    $bgColor = match ($bgColor) {
        'gray' => 'bg-gray-300',
        'blue' => 'bg-blue-300',
        'red' => 'bg-red-300',
        'yellow' => 'bg-yellow-300',
        default => 'bg-gray-100',
    };
@endphp

<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor }}  rounded-xl px-3 py-1 text-base">
    {{ $slot }}
</button>
