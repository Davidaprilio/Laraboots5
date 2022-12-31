@props([
    'id' => null,
    'label' => null,
    'validation' => true,
    'type' => 'text',
    'value' => null,
    'default' => null,
    'name' => 'input',
    'size' => null,
    'col' => 'mb-4',
])

@php
    $id = $id ?? $name . '-input';
@endphp

<div class="form-group {{ $col }}">
    @if ($label)
        <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    @endif

    <x-bs-input {{ $attributes->merge([
        'id' => $id,
        'validation' => $validation,
        'type' => $type,
        'size' => $size,
        'value' => $value,
        'default' => $default,
        'name' => $name,
    ]) }} />

    @if ($validation)
        @error($name)
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    @endif
</div>
