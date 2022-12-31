@extends('laraboots5::layouts.app')
@section('content')
<div class="container mb-5 mt-4">
    <div class="row">
        <div class="col-12 col-md-9">
            <h1>{{ $title }}</h1>
            {{ $slot }}
        </div>

        <div class="col-3 d-none d-md-block position-relative" id="nav-items">
            <div class="position-sticky pt-2">
                <h5>On this page</h5>
                <hr>
                <ul>
                    @stack('this-page-item')
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection