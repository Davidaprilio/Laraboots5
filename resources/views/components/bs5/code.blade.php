@props([
    'slot' => null,
    'code' => null,
])
<code>{{ $code ?? $slot->__toString() }}</code>
