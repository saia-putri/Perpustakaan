<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- css local -->
    <link rel="stylesheet" href="{{ asset('/') }}style.css">

    <!-- Link Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Space+Grotesk:wght@600&display=swap"
        rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-md bg-hijau navbar-dark fixed-top pengunjung">
        <div class="container-fluid justify-content-end pengunjung1 bg-dilmil2">
            <button class="navbar-toggler bg-btn" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-hijau" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title mt-3 text-white" id="offcanvasNavbarLabel">Menu</h3>
                    <hr>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body menu1">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/main">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/katalogbuku">Katalog Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/info">Info Perpustakaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/lokasi">Lokasi Perpustakaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/pustakawan">Pustakawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">Masuk Pustakawan</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- ini konten -->
    @yield('content')

    <!-- ini footer -->
    <footer class=" menu1 d-flex flex-wrap bg-dilmil justify-content-between align-items-center py-3 border-top">
        <p class="mb-0 px-2 text-white">&copy; Pengadilan Militer I-04 Palembang - Presented by PalComTech</p>
        <ul class="nav col-md-6 icon justify-content-end">
            <li class="nav-item"><a href="/main" class="nav-link px-2 "><i class="bi bi-house-door"></i></a></li>
            <li class="nav-item"><a href="https://dilmil-palembang.go.id/id/" class="nav-link px-2 text-white"><i
                        class="bi bi-globe2"></i></a></li>
            <li class="nav-item"><a href="https://wa.me/6281234788104" class="nav-link px-2 text-white"><i
                        class="bi bi-whatsapp"></i></a>
            </li>
            <li class="nav-item"><a href="https://www.facebook.com/pengadilanmiliter.palembang"
                    class="nav-link px-2 text-white"><i class="bi bi-facebook"></i></a></li>
            <li class="nav-item"><a href="https://www.instagram.com/dilmil_palembang/"
                    class="nav-link px-2 text-white"><i class="bi bi-instagram"></i></a></li>
            <li class="nav-item"><a href="https://www.youtube.com/@dilmil104palembang"
                    class="nav-link px-2 text-white"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
