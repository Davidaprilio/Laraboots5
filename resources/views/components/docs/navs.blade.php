@props(['icon', 'text', 'path' => null])
<li class="py-2">
    <strong class="bd-links-heading d-flex w-100 align-items-center fw-semibold">
        <i class="{{ $icon }} me-2"></i>
        <span>{{ $text }}</span>
    </strong>
    <ul class="list-unstyled fw-normal pb-2 ps-2 small">
        {{ $slot }}
    </ul>
</li>