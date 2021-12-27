@props([
  'label' => false,
  'id' => false,
  'validation' => false,
  'old' => false,
  'value' => false,
  'parentClass' => 'mb-3',
  'name' => false,
  'type' => 'text'
])

<div class="{{ $parentClass }}">
  @if($label)
  <label @if($id) for="{{ $id }}" @endif class="form-label">{{ $label }}</label>
  @endif
  <input
    type="{{ $type }}"
    @if($id) id="{{ $id }}" @endif 
    @if($name) name="{{ $name }}" @endif
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
</div>