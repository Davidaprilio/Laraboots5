@props([
    'type' => 'success',
    'error' => false,
    'flashMessage' => false,
    'head' => false,
    'close' => false
])
<div class="alert alert-{{ $type }}" role="alert">
    @if ($head)
        <h4 class="alert-heading">{{ $head }}</h4>
    @endif
    {{ $slot }}

    @if ($close)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>