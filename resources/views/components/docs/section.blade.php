@php
    $is_push = isset($push);
    if ($is_push) {
        $push = gettype($push) === 'string' ? $push : strtolower(str_replace(' ', '-', $title));
    }
@endphp

<section class="mt-4" @if($is_push)id="{{ $push }}@endif">
    @if ($is_push)
    <a href="#{{ $push }}" class="link-dark text-decoration-none">
        <h3 class="title-section">{{ $title }}</h3>
    </a>
    @else
    <h3 class="title-section">{{ $title }}</h3>
    @endif

    <div>
        {{ $slot }}
    </div>
    
    @isset($preview)
    <div class="rounded border p-4">
        {{ $preview }}
    </div>
    @if ($preview->attributes['code'] ?? false)
    <x-lbdocs-codes :codes="$codes" />
    @endif
    @endisset

    @isset($codes)
    <x-lbdocs-codes :codes="$codes" />
    @endisset

    @isset($bottom)
        {{ $bottom }}
    @endisset

    @pushIf($is_push,'this-page-item')
        <x-lbdocs-item :id="$push" :text="$title"/>
    @endPushIf
<section>

