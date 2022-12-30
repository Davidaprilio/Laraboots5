@props([
    'id' => null,
    'validation' => true,
    'type' => 'text',
    'value' => null,
    'default' => null,
    'name' => 'input',
    'size' => null,
])

@php $id_input = $id ?? $name . '-input'; @endphp

<input
{{ $attributes->class([
    'form-control',
    "form-control-{$size}" => in_array($size, ['sm', 'lg']),
    'is-invalid' => $validation && $errors->has($name),
])->merge([
    'id' => $id_input,
    'name' => $name,
    'type' => $type,
    'value' => $value ?? (old($name, $value ?? null) ?? $default),
    'autocomplete' => $name,
]) }} 
/>
