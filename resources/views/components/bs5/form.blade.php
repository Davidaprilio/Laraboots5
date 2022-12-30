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
    @csrf
    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif
    {{ $slot }}
</form>