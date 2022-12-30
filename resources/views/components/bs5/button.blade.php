@props([
    'color' => 'primary',
])

<button {{ $attributes->class(["btn btn-{$color}"])->merge(['type' => 'submit']) }}>{{ $slot }}</button>
