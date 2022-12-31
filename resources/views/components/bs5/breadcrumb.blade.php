@props([
    'divider' => "'/'",
    'items' => [],
])

@php
    if (gettype($items) === 'string') {
        $_items = explode('/', $items);
        $items = [];
        foreach ($_items as $text) {
            $items["{$text}"] = '#';
        }
    }
@endphp

<nav style="--bs-breadcrumb-divider: {{ $divider }};" aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach ($items as $text => $link)
        <li {{ $attributes->class(['breadcrumb-item', 'active' => $loop->last]) }}>
            @if ($loop->last)
            {{ $text }}
            @else
            <a href="{{ $link }}">{{ $text }}</a>
            @endif
        </li>    
        @endforeach
    </ol>
</nav>
