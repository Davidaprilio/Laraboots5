@props([
  'label' => false,
  'id' => false,
  'validation' => false,
  'old' => false,
  'value' => false,
  'mb' => 3,
  'name' => false,
  'type' => 'text'
])

<div class="mb-{{ $mb }}">
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
      'is-invalid' => $errors->has($name)]) }}
    {{ $attributes }}>
  @if($validation)
   @error($name)
   <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  @endif
</div>