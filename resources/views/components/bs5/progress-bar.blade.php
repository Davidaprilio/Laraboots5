@props([
'bg' => 'success',
'value' => 0,
'min' => 0,
'max' => 100,
])

<div role="progressbar" {{ $attributes->class(["progress-bar bg-{$bg}"])->merge([
    'style' => "width: {$value}%;"
    'aria-valuenow' => $value,
    'aria-valuemin' => $min,
    'aria-valuemax' => $max,
    ]) }}></div>