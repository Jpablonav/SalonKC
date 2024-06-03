<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css"
        media="all">
    <link rel="stylesheet" href="/css/menu.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand link" href="inicio">Salon KC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link link active" aria-current="page" href="inicio">Inicio</a>
                    <a class="nav-link link" href="productos">Productos</a>
                    <a class="nav-link link" href="servicio">Servicios</a>
                    <a class="nav-link link" href="contacto">Contacto</a>
                </div>
            </div>
        </div>
        <form role="search" method="get" id="searchform" action="/"
            class="d-flex ms-auto justify-content-center">

            <div class="input-group">
                <input type="text" value="" name="s" id="s" class="form-control"
                    placeholder="Search..." aria-label="Search">
                <span class="input-group-text" id="basic-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        class="text-dark" width="1rem" height="1rem" viewBox="0 0 24 24" style=""
                        lc-helper="svg-icon" fill="currentColor">
                        <path
                            d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z">
                        </path>
                    </svg>
                </span>
            </div>

        </form>
    </nav> 

</header>

@yield('contenido')
<footer>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css"
        media="all">

    <div class="container py-5">
        <div class="row min-vh-25 align-items-center text-center">
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor"
                                viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                </path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p class="lead">3316708413</p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" width="2em" height="2em" viewBox="0 0 24 24" style=""
                                lc-helper="svg-icon" fill="currentColor">
                                <path
                                    d="M12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5M12,2A7,7 0 0,1 19,9C19,14.25 12,22 12,22C12,22 5,14.25 5,9A7,7 0 0,1 12,2M12,4A5,5 0 0,0 7,9C7,10 7,12 12,18.71C17,12 17,10 17,9A5,5 0 0,0 12,4Z">
                                </path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p class="lead">Calle Santa Barbara 445 Hacienda Santa Fe
                            </p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" width="2em" height="2em" viewBox="0 0 24 24" style=""
                                lc-helper="svg-icon" fill="currentColor">
                                <path
                                    d="M13 17H17V14L22 18.5L17 23V20H13V17M20 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H11V18H4V8L12 13L20 8V14H22V6A2 2 0 0 0 20 4M12 11L4 6H20Z">
                                </path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p class="lead">salon.barberkc@gmail.com</p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div>

</footer>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
