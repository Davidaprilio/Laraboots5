@props([
'bg' => 'success',
'value' => 0,
'min' => 0,
'max' => 100,
])


<div class="progress">
    @if (gettype($value) == 'array')
    @foreach ($value as $val)
    <x-bs-progress-bar :bg="$val['bg'] ?? 'primary'" :value="$val['value']" :min="$min" :max="$max" />
    @endforeach
    @else
    <x-bs-progress-bar :bg="$bg" :value="$value" :min="$min" :max="$max" />
    @endif
</div>