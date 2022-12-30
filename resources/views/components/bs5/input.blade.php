@props([
    'label' => null,
    'id' => null,
    'validation' => true,
    'type' => 'text',
    'value' => null,
    'default' => null,
    'name' => 'input',
    'size' => null,
])

@php $id = $id ?? $name . '-input'; @endphp

@if ($label)
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
@endif
<input
    {{ $attributes->class([
            'form-control',
            "form-control-{$size}" => in_array($size, ['sm', 'lg']),
            'is-invalid' => $validation && $errors->has($name),
        ])->merge([
            'id' => $id,
            'name' => $name,
            'type' => $type,
            'value' => $value ?? (old($name, $value ?? null) ?? $default),
            'autocomplete' => $name,
        ]) }} />
