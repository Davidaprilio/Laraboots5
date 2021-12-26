@props([
  'label',
  'id' => Str::random(6),
  'validation' => false,
  'old' => false,
  'value' => false,
  'name' => false,
  'type' => 'text'
])
<div class="form-floating">
  <input 
    type="{{ $type }}"
    id="{{ $id }}"
    placeholder="{{ $label }}"
    @if($name) name="{{ $name }}" @endif
    @if($old) value="{{ old($name) ?? $value }}" @endif
    {{ $attributes->class([
      'form-control', 
      'is-invalid' => ($validation && $errors->has($name)) ? $errors->has($name) : false
      ]) }}
    {{ $attributes }}>
  <label for="{{ $id }}" class="form-label">{{ $label }}</label>
</div>
@if($validation)
  @error($name)
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
@endif