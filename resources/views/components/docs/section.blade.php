<section class="mt-4">
    <h3>{{ $title }}</h3>
    <div>
        {{ $slot }}
    </div>
    
    @isset($preview)
    <div class="rounded border p-4">
        {{ $preview }}
    </div>
    @endisset

    @isset($codes)
    <x-lbdocs-codes :codes="$codes" />
    @endisset

    @isset($bottom)
        {{ $bottom }}
    @endisset
<section>

