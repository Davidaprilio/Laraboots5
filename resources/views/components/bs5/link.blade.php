@props([
    'method' => 'GET',
    'data' => [],
    'href' => '#',
    'classform' => '',
    'idForm' => false,
    'type' => "submit"
])
@php
$params = http_build_query($data);
$method = strtoupper($method);
$disabled = $disabled ? 'disabled' : '';
if (count($data)) {
    $href = "{$href}?{$params}";
}
@endphp

@if ($method === 'GET')
    <a href="{{ $href }}" {{ $attributes }}>{{ $slot }}</a>
@else
    <x-bs-form :action="$href" class="d-inline {{ $classform }}" :method="$method"@if($idForm) id="{{ $idForm }}"@endif>
        <x-bs-button {{ $attributes->merge([
            'type' => $type;
        ]) }}>{{ $slot }}</x-bs-button>
    </x-bs-form>
@endif
