@props([
    'label' => false,
    'id' => false,
    'validation' => false,
    'old' => false,
    'value' => false,
    'parentClass' => 'mb-3',
    'name' => false,
    'addonText' => false,
    'addonPosition' => 'before',
    'type' => 'text',
    'idGroup' => Str::random(6)
])
<div class="{{ $parentClass }}">
    @if($label)
    <label @if($id) for="{{ $id }}" @endif class="form-label">{{ $label }}</label>
    @endif
    <div class="input-group @if ($validation && $errors->has($name)) has-validation @endif">
        @if ($addonPosition == 'before')
            @if ($addonText)
            <span class="input-group-text" id="{{ $idGroup }}">
                {{ $addonText }}
            </span>
            @endif
            {{ $slot }}
        @endif
        <input
            type="{{ $type }}"
            aria-describedby="{{ $idGroup }}" 
            @if($id) id="{{ $id }}" @endif
            @if($old) value="{{ old($name) ?? $value }}" @endif
            {{ $attributes->class([
                'form-control', 
                'is-invalid' => ($validation && $errors->has($name)) ? $errors->has($name) : false
            ]) }}
            {{ $attributes }}>
        @if($validation)
            @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        @endif
        @if ($addonPosition == 'after')
            @if ($addonText)
            <span class="input-group-text" id="{{ $idGroup }}">
                {{ $addonText }}
            </span>
            @endif
            {{ $slot }}
        @endif
    </div>
</div>