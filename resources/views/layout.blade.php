<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buzzvel Test</title>
        <link rel="icon" type="image/x-icon" href="https://buzzvel.com/storage/favicon.ico">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
        <script>
        $(document).ready(function(){
            setTimeout(function(){
            $("#my-alert").addClass("d-none");
            }, 2000);
        });
        </script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-inverse">
                <div class="container pt-3 pb-3">
                    <a class="navbar-brand" href="/">
                    <img src="https://buzzvel.com/storage/images/logo-light.svg" alt="Buzzvel">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Solutions</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
            @if (isset($msg))
            <div class="alert-box">
                <div class="alert alert-danger" id="my-alert" role="alert">
                    {{$msg}}
                </div>
            </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </main>
        <footer class="footer mt-auto py-3">
            <div>
                <a href="https://linkedin.com/in/vitucs">
                    <img src="https://buzzvel.com/storage/images/linkedin.svg" alt="linkedin" width="30" height="30"/>
                </a>
                <a href="https://github.com/vitucs">
                    <img src="https://buzzvel.com/storage/images/github.svg" alt="github" width="30" height="30"/>
                </a>
                <a href="https://www.cvkeep.com/cv/vitucs">
                    <svg fill="#ffffff" height="30" width="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 392.533 392.533" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M292.396,324.849H99.879c-6.012,0-10.925,4.848-10.925,10.925c0,6.012,4.849,10.925,10.925,10.925h192.582 c6.012,0,10.925-4.849,10.925-10.925C303.321,329.697,298.473,324.849,292.396,324.849z"></path> </g> </g> <g> <g> <path d="M292.396,277.01H99.879c-6.012,0-10.925,4.848-10.925,10.925c0,6.012,4.849,10.925,10.925,10.925h192.582 c6.012,0,10.925-4.849,10.925-10.925C303.321,281.859,298.473,277.01,292.396,277.01z"></path> </g> </g> <g> <g> <path d="M196.137,45.834c-25.859,0-46.998,21.075-46.998,46.998c0,25.859,21.139,46.933,46.998,46.933 s46.998-21.075,46.998-46.998S221.996,45.834,196.137,45.834z M196.137,117.851c-13.77,0-25.083-11.313-25.083-25.083 c0-13.77,11.248-25.083,25.083-25.083s25.083,11.313,25.083,25.083C221.22,106.537,209.907,117.851,196.137,117.851z"></path> </g> </g> <g> <g> <path d="M258.521,163.362c-39.887-15.515-84.752-15.515-124.638,0c-13.059,5.107-21.786,18.101-21.786,32.388v44.347 c-0.065,6.012,4.849,10.925,10.861,10.925h146.424c6.012,0,10.925-4.848,10.925-10.925V195.75 C280.307,181.463,271.58,168.469,258.521,163.362z M258.521,229.236H133.883v-33.422c0-5.301,3.168-10.214,7.887-12.024 c34.844-13.511,74.02-13.511,108.865,0c4.719,1.875,7.887,6.659,7.887,12.024V229.236z"></path> </g> </g> <g> <g> <path d="M313.083,0H131.491c-8.404,0-16.291,3.232-22.238,9.18L57.018,61.414c-5.947,5.948-9.18,13.834-9.18,22.238v277.333 c0,17.39,14.158,31.547,31.547,31.547h233.762c17.39,0,31.547-14.158,31.547-31.547V31.547C344.501,14.158,330.343,0,313.083,0z M112.032,37.236v27.022H85.01L112.032,37.236z M322.715,116.816h-40.598c-6.012,0-10.925,4.849-10.925,10.925 c0,6.012,4.848,10.925,10.925,10.925h40.598v19.394h-14.869c-6.012,0-10.925,4.848-10.925,10.925 c0,6.012,4.849,10.925,10.925,10.925h14.869v181.139c0,5.366-4.331,9.697-9.632,9.697H79.192c-5.301,0-9.632-4.331-9.632-9.632 V86.044h53.398c6.012,0,10.925-4.848,10.925-10.925V21.721h179.2c5.301,0,9.632,4.331,9.632,9.632V116.816z"></path> </g> </g> </g></svg>
                </a>
            </div>
        </footer>
    </body>
</html>


