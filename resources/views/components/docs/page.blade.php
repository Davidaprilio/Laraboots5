@extends('laraboots5::layouts.app')
@section('content')
<div class="container mb-5 mt-4">
    <h1>{{ $title }}</h1>

    {{ $slot }}
</div>
@endsection