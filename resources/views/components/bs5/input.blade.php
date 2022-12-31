@props([
    'validation' => true,
    'type' => 'text',
    'value' => null,
    'default' => null,
    'name' => 'input',
    'size' => null,
])

@aware([
    'model' => null
])

@php
    $aviable_type = [
        'text',
        'number',
        'password',
        'date',
        'file',
        'radio',
        'checkbox',
    ];

    if (!in_array($type, $aviable_type)) {
        throw new \Exception("Invalid type input {$name}", 1);
    }

    if ($model) {
        $value = $model->{$name} ?? null;
    }
    
    $value = $value ?? (old($name, $value ?? null) ?? $default);

@endphp

<input
{{ $attributes->class([
    'form-control',
    "form-control-{$size}" => in_array($size, ['sm', 'lg']),
    'is-invalid' => $validation && $errors->has($name),
])->merge([
    'name' => $name,
    'type' => $type,
    'value' => $value,
    'autocomplete' => $name,
]) }} 
/>
