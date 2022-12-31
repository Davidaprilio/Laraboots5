@props([
    'type' => 'primary',
    'dismiss' => true,
    'name' => null,
])

@php $nameSession = $name ?? $type; @endphp

@if (session()->has($nameSession))
    <x-bs-alert.basic :type="$type" :dismiss="$dismiss" :message="session()->get($nameSession)" />
@endif
