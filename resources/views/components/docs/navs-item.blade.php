@props([
    'text', 
    'href' => null
])

@aware(['path' => null])

@php
    $href = $href ?? strtolower(str_replace(' ', '-', $text));
    $href = $path ? "{$path}/{$href}" : $href;
@endphp

<li>
    <a class="bd-links-link d-inline-block rounded" href="{{ url("lb5/docs/{$href}") }}">{{ $text }}</a>
</li>