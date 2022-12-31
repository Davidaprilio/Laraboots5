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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/enlighterjs@3.4.0/dist/enlighterjs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/enlighterjs@3.4.0/dist/enlighterjs.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/highlightjs-copy/dist/highlightjs-copy.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/base16/google-light.min.css">

    <title>Laravel Bootstrap Component</title>

    <style>
        :root {
            --bd-violet-rgb: 112.520718,44.062154,249.437846;
        }
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

        pre {
            tab-size: 2;
            margin-bottom: 0;
        }
        
        .hljs-copy-button {
            background-color: rgba(0, 0, 0, 0.4);
        }


        pre code.hljs {
            background: #f8f9fa !important;
            margin-bottom: -21px;
        }
        
        .position-sticky {
            top: 4rem;
        }

        #navigation-menu strong,
        #navigation-menu a {
            padding: 5px 10px !important;
        }

        #navigation-menu a:hover,
        #navigation-menu a.active {
            background-color: #dfdfdf;
            color: #272727;
        }
        #navigation-menu {
            overflow-y: auto;
            /* overflow-x: hidden; */
        }
        .bd-links-link {
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1rem;
            color: rgba(0,0,0,0.65);
            text-decoration: none;
        }

        .title-section {
            padding-top: 5rem;
            margin-top: -5rem;
        }

        .bd-navbar {
            padding: .75rem 0;
            background-color: transparent;
            background-image: linear-gradient(to bottom, rgba(var(--bd-violet-rgb), 1), rgba(var(--bd-violet-rgb), 0.95));
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15),inset 0 -1px 0 rgba(0,0,0,0.15);
        }

        #nav-items a {
            color: rgba(0,0,0,0.65) !important;
            text-decoration: none;
        }
        #nav-items a:hover {
            text-decoration: underline;
            color: #272727;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bd-navbar fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand" href="#">
                <span>Laraboots</span><strong>5</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Credit</a>
                    </li>
                </ul>
            </div>
            <a href="//github.com/Davidaprilio/laraboots5" target="_blank" class="btn btn-outline-light">
                <i class="bi-github"></i>
                View repo
            </a>
        </div>
    </nav>

    <div class="row w-100 vh-100 container-xxl mx-auto px-0 mt-5">
        <div class="col-md-2 border-end d-none d-md-block position-relative mt-4">
            <div class="position-sticky">
                <ul class="list-unstyled mb-0 pb-3 pb-md-2 pe-lg-2 ms-2" id="navigation-menu">
                    @include('laraboots5::layouts.sidebar')
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-10 pt-5">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('/vendor/laraboots5/enlighterjs.min.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/enlighterjs@3.4.0/dist/enlighterjs.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script src="https://unpkg.com/highlightjs-blade/dist/blade.min.js"></script>
    <script src="https://unpkg.com/highlightjs-copy/dist/highlightjs-copy.min.js"></script>

    <script>
        hljs.highlightAll();
        hljs.addPlugin(new CopyButtonPlugin());

        var code = document.querySelectorAll('pre');
        // code.forEach(elCode => {
        //     EnlighterJS.enlight(elCode, {
        //         language: 'html',
        //         theme: 'bootstrap4',
        //         indent: 2,
        //         textOverflow: 'scroll',
        //         linenumbers: false,
        //     });
        // });

        const pathUrl = window.location.origin + window.location.pathname;
        const activeNav = document.querySelector(`#navigation-menu a[href="${pathUrl}"]`)
        activeNav.classList.add('active', 'fw-semibold')
    </script>
</body>

</html>
