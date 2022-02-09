@props([
    'method' => 'POST'
])
<form method="{{ strtolower($method) == 'get' ? 'GET' : 'POST' }}" {{ $attributes }}>
    @csrf
    @if (strtolower($method) != 'get' && strtolower($method) != 'post')
    @method(strtoupper($method))
    @endif
    {{ $slot }}
</form>