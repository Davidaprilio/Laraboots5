@php
    if(is_array($codes)) {
        $codes = implode("\n", $codes);
    } else {
        $codes = $codes->__toString();
    }
@endphp
<div class="bg-light rounded-bottom border border-top-0">
<pre>
<code>{{ $codes }}</code>
</pre>
    {{-- <pre>@foreach ($codes as $code){{ $code }}&#10;@endforeach</pre> --}}
</div>