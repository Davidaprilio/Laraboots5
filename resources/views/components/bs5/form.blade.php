@props([
    'method' => 'POST',
    'file' => false,
    'model' => null,
    'url' => null,
    'route' => null,
    'action' => '',
])

@php
    $method = strtoupper($method);

    if ($url) {
        $action = url($url);
    } elseif ($route) {
        $action = route($route[0], $route[1] ?? []);
    }
@endphp

<form {{ $attributes->merge([
    'action' => $action,
    'method' => $method == 'GET' ? 'GET' : 'POST',
    'enctype' => $file ? 'multipart/form-data' : false,
]) }}>
    @if ($method !== 'GET')
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif
    @endif
    {{ $slot }}
</form>