@php
    if(is_array($codes)) {
        $codes = implode("\n", $codes);
    } else {
        $codes = $codes->__toString();
    }
@endphp
<div class="bg-light">
<pre>
{{ $codes }}
</pre>
    {{-- <pre>@foreach ($codes as $code){{ $code }}&#10;@endforeach</pre> --}}
</div>