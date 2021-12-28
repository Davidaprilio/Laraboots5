@props([
  'label' => false,
  'id' => Str::random(6),
  'validation' => false,
  'old' => false,
  'value' => false,
  'parentClass' => 'mb-3',
  'name' => false,
  'type' => 'text'
])

<div class="{{ $parentClass }}">
  @if($label)
  <label for="{{ $id }}" class="form-label">{{ $label }}</label>
  @endif
  <input
    type="{{ $type }}"
    value="{{ $value ?? old($name) }}"
    id="{{ $id }}"
    @if($name) name="{{ $name }}" @endif
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
</div>