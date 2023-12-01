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

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Space+Grotesk:wght@600&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- header -->
    <nav class="admin bg-hijau text-white navbar-expand-lg bg-dilmil1">
        <div class="container-fluid">
            <marquee behavior="" direction="">Perpustakaan Pengadilan Militer I-04 Palembang</marquee>
        </div>
    </nav>

    <div class="colomn">
        <div class="row">

            <!-- ini sebelah kiri -->
            <div class="col-md-3 col-4 bg-dilmil1">
                <div class="left-bar">
                    <div class="d-flex flex-column flex-shrink-0 p-3" style="min-height: 76vh">

                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('storage/' . $user->gambar) }}" alt="" width="32"
                                    height="32" class="rounded-circle me-2">
                                <strong>{{ $user->name }}</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="/profil">Profile</a></li>
                                <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                            </ul>
                        </div>

                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto ">
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link link-body-emphasis" aria-current="page"><i
                                        class="bi bi-house-door"></i>
                                    <svg class="bi pe-none me-2" width="16" height="16"></svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/buku" class="nav-link link-body-emphasis"><i class="bi bi-book"></i>
                                    <svg class="bi pe-none me-2" width="16" height="16"></svg>
                                    Buku
                                </a>
                            </li>
                            <li>
                                <a href="/kategori" class="nav-link link-body-emphasis"><i class="bi bi-bookmark"></i>
                                    <svg class="bi pe-none me-2" width="16" height="16"></svg>
                                    Kategori
                                </a>
                            </li>
                            <li>
                                <a href="/rak" class="nav-link link-body-emphasis"><i class="bi bi-hdd-rack"></i>
                                    <svg class="bi pe-none me-2" width="16" height="16"></svg>
                                    Rak Buku
                                </a>
                            </li>
                            <li>
                                <a href="/user" class="nav-link link-body-emphasis"><i class="bi bi-person"></i>
                                    <svg class="bi pe-none me-2" width="16" height="16"></svg>
                                    User
                                </a>
                            </li>
                        </ul>
                        <hr>

                    </div>
                </div>
            </div>

            <!-- ini konten -->
            <div class="col-md-9 col-8">
                @yield('content')
            </div>



            <!-- ini footer -->
            <footer
                class=" menu1 d-flex flex-wrap bg-dilmil justify-content-between align-items-center py-3 border-top">
                <p class="mb-0 px-2 text-white">&copy; Pengadilan Militer I-04 Palembang</p>
                <ul class="nav col-md-6 icon justify-content-end">
                    <li class="nav-item"><a href="/dashboard" class="nav-link px-2 "><i
                                class="bi bi-house-door"></i></a>
                    </li>
                    <li class="nav-item"><a href="https://dilmil-palembang.go.id/id/"
                            class="nav-link px-2 text-white"><i class="bi bi-globe2"></i></a></li>
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
