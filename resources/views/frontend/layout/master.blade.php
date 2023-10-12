<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ecofood</title>
    <link href="{{ asset('Design') }}/css/styles.css" rel="stylesheet" />
</head>

<body class="text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex border-bottom border-success" id="wrapper">
                <nav class="navbar navbar-light bg-light fixed-left">
                    <button class="navbar-toggler bg-success" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span><img src="{{ asset('Assets/Icon/icon - menu burger.png') }}" alt=""></span>
                    </button>
                    <div class="container-fluid">
                        <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasDarkNavbar"
                            aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <img src="{{ asset('Assets/Icon/logo.png') }}" alt="">
                                <button type="button" class="btn-close btn-close-success" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Recipe</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Find Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                @yield('konten')

                <div class="bg-footer">
                    <div class="container p-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row text-center">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="#" class="btn text-white">News</a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn text-white">E-Shop</a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn text-white">About Us</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="#" class="btn text-white">Privacy Policy</a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn text-white">Guideline</a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn text-white">FAQ</a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn text-white">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3>THE LATEST FORUM US</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="autoSizingInputGroup"
                                        placeholder="Enter Your Email">
                                    <div class="input-group-text bg-success">SIG UP</div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-2">
                                <h4>Connect With Us</h4>
                                <div>
                                    <img src="{{ asset('Assets/Icon/icon - fb footer.png') }}" alt="">
                                    <img src="{{ asset('Assets/Icon/icon - ig footer.png') }}" alt="">
                                    <img src="{{ asset('Assets/Icon/icon - twitter footer.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-footer2">
                    <div class="text-center justify-content-center">
                        <p>
                            Copyright Lorem, ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Design') }}/js/scripts.js"></script>
</body>

</html>
