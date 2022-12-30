@props([
'toggle' = true,
'align' => 'down'
'menu' => []
])

@php
$alg = [
'up' => 'dropup',
'down' => 'dropdown',
'right' => 'dropend',
'left' => 'dropstart',
];
@endphp

<div class="dropdown">
    <x-bs-button {{ $attributes->class("dropdown-toggle" => $toggle) }} type="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{ $slot }}
    </x-bs-button>
    <ul {{ $attributes->class(['dropdown-menu', 'dropdown-menu-dark' => $attributes->has('dark')]) }}>
        @foreach ($menu as $name => $link)
        @if ($name == '--')
        <li>
            <hr class="dropdown-divider">
        </li>
        @elseif(gettype($link) == 'array')
        <li>
            <x-bs-dropdown :toggle="false" :align="$align" :menu="$link">{{ $name }}</x-bs-dropdown>
        </li>
        @else
        <li>
            <a class="dropdown-item" :href="$link ?? '#'">{{ $name }}</a>
        </li>
        @endif
        @endforeach
        {{ $slot }}
    </ul>
</div>