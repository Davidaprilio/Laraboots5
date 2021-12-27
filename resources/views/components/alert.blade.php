@props([
    'type' => 'primary',
    'error' => false,
    'flashMessage' => false,
    'head' => false,
    'close' => false
])

@if ($error)
    {{-- Error handle --}}
    @error($error)
    <div {{ $attributes->class(['alert', 'alert-'.$type]) }} role="alert" {{ $attributes }}>
        @if ($head)
            <h4 class="alert-heading">{{ $head }}</h4>
        @endif
        {{ $message }}

        @if ($close)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
    @enderror
@elseif($flashMessage)
    
    {{-- Flash Message handle --}}
    @if (session()->has($flashMessage))
    <div {{ $attributes->class(['alert', 'alert-'.$type]) }} role="alert" {{ $attributes }}>
        @if ($head)
            <h4 class="alert-heading">{{ $head }}</h4>
        @endif
        {{ session()->get($flashMessage) }}

        @if ($close)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
    @endif
    
@else
    {{-- Basic Alert --}}
    <div {{ $attributes->class(['alert', 'alert-'.$type]) }} role="alert" {{ $attributes }}>
        @if ($head)
            <h4 class="alert-heading">{{ $head }}</h4>
        @endif
        {{ $slot }} 

        @if ($close)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
@endif