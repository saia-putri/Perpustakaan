@extends('pengunjung.mainapps')
@section('title')
    MASUK
@endsection
@section('content')
    <!-- HEADER -->
    <section>
        <div class="header img2">
            <form class="d-flex mt-3" role="search" action="/search" method="get" autocomplete="off">
                <div class="marquee down pencarian1">

                    <div class="row">
                        <div class="col">
                            <input class="form-control form4" type="search" placeholder="Search" aria-label="Search"
                                type="text" class="s-search animated fadeInUp delay4" id="keyword" name="keywords"
                                value="" lang="id_ID" aria-hidden="true" autocomplete="off">
                        </div>
                        <div class="col">
                            <button class="btn bg-btn btn-outline-light form5 s-btn animated fadeInUp delay4" type="submit"
                                name="search" value="search"><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <!--  -->
    <main class="form-signin m-auto">
        <div class="container py-5">
            <form>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
        </div>
    </main>
@endsection
