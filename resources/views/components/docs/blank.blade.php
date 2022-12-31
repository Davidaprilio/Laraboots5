@php
    if (strpos($href, '//') === false) {
        $href = "https://getbootstrap.com/docs/{$href}";
    }
@endphp
<a href="{{ $href }}" target="_blank">
    {{ $slot }} 
    <i class="bi-box-arrow-up-right ms-1" style="font-size: {{ $size ?? '12' }}px"></i>
</a>