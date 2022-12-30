<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- <link href="{{ asset('/vendor/laraboots5/enlighterjs.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/enlighterjs@3.4.0/dist/enlighterjs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/enlighterjs@3.4.0/dist/enlighterjs.bootstrap4.min.css">

    <title>Laravel Bootstrap Component</title>
    <style>
        .enlighter-t-bootstrap4 {
            padding: 40px 10px 10px !important;
        }

        .enlighter-toolbar {
            display: block !important;
        }

        .enlighter-toolbar .enlighter-btn-website,
        .enlighter-toolbar .enlighter-btn-window,
        .enlighter-toolbar .enlighter-btn-raw,
        .enlighter-btn-collapse {
            display: none !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: var(--bs-purple);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span>Laraboots</span><strong>5</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row w-100 vh-100">
        <div class="col-2 border">
            <x-lb5-navs type="h" :menu="[
                [
                    'text' => 'Alert',
                    'link' => '/docs/alert',
                ],
                [
                    'text' => 'Forms',
                    'link' => '/docs/forms',
                ],
                [
                    'text' => 'Input',
                    'link' => '#form',
                ],
                [
                    'text' => 'Modal  ',
                    'link' => '#form',
                ],
            ]"></x-lb5-navs>
        </div>
        <div class="col-9">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('/vendor/laraboots5/enlighterjs.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/enlighterjs@3.4.0/dist/enlighterjs.min.js"></script>
    <script>
        var code = document.querySelectorAll('pre');
        code.forEach(elCode => {
            EnlighterJS.enlight(elCode, {
                language: 'html',
                theme: 'bootstrap4',
                indent: 2,
                textOverflow: 'scroll',
                linenumbers: false,
            });
        });
    </script>
</body>

</html>
