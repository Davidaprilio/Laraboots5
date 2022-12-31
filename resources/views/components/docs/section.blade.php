<section class="mt-4" @isset($push)id="{{ $push }}@endisset">
    @isset($push)
    <a href="#{{ $push }}" class="link-dark text-decoration-none"><h3>{{ $title }}</h3></a>
    @else
    <h3>{{ $title }}</h3>    
    @endisset

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

    @pushIf(isset($push),'this-page-item')
        <x-lbdocs-item :id="$push" :text="$title"/>
    @endPushIf
<section>

