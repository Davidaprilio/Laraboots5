@props([
'type' => 'border', // border|grow
'color' => 'primary'
'size',
])

<?php $sz = ['sm', 'md', 'lg', 'xl'] ?>

<div {{ $attributes->class([
    "spinner-{$type} text-{$color}",
    "spinner-{$type}-{$size}" => in_array($size, $sz)
    ])->merge([
    'style' => !in_array($size, $sz) ? "width: {$size}; height: {$size};" : ''
    ]) }} role="status">
    <span class="visually-hidden">Loading...</span>
</div>