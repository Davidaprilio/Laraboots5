@props([
    'dismiss' => true,
    'name',
])

@error($name)
    <x-bs-alert.basic type="danger" :dismiss="$dismiss" :message="$message" />
@enderror
