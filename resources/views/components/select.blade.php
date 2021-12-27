@props([
    'label' => false,
    'id' => Str::random(6),
    'validation' => false,
    'old' => false,
    'options' => [],
    'mb' => 3,
    'name' => false,
])
<div class="mb-{{ $mb }}">
    @if($label)
    <label @if($id) for="{{ $id }}" @endif class="form-label">{{ $label }}</label>
    @endif
    <select
    @if($id) id="{{ $id }}" @endif 
    @if($name) name="{{ $name }}" @endif
    {{ $attributes->class([
        'form-control form-select', 
        'is-invalid' => ($validation && $errors->has($name)) ? $errors->has($name) : false
    ]) }}
    {{ $attributes }}>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}">{{ $text }}</option>
        @endforeach
        {{ $slot }}
    </select>
    @if($validation)
        @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    @endif
</div>