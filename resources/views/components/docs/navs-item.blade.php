@props([
    'text', 
    'href' => null
])

@php
    $href = $href ?? strtolower(str_replace(' ', '-', $text));
@endphp

<li>
    <a class="bd-links-link d-inline-block rounded" href="{{ url("lb5/docs/{$href}") }}">{{ $text }}</a>
</li>