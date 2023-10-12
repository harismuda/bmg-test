@extends('frontend.layout.master')
@section('konten')
    <div id="page-content-wrapper">
        <div class="bg-img">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link text-white" href="#!">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="#!">Recipe</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="#!">Find Us</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="#!">About Us</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="#!">Contact Us</a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a class="nav-link text-white" href="#!"><img
                                        src="{{ asset('Assets/Icon/icon - search.png') }}" alt=""></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ asset('Assets/Icon/icon - profile.png') }}" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!"><u>Login</u></a>
                                    <a class="dropdown-item" href="#!"><u>Register</u></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <h1 class="mt-4 hero-text">Lorem ipsum dolor sit amet <br>consectetur adipisicing elit.
                </h1>
                <p>20 June 2021 By Minako</p>
            </div>
        </div>
        <div class="container p-4">
            <div class="row">
                <h3 class="text-success"><b>The LATEST ______</b></h3>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($artikel as $item)
                            <div class="col-lg-6 justify-content-start mt-4">
                                <div style="width: 18rem;">
                                    <img src="{{ asset('images/' . $item->thumbnail_content) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">{{ $item->judul_content }}</h5>
                                        <p class="card-text text-dark">{{ $item->isi }}</p>
                                        <a href="{{ url('detail') }}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 ml-4 text-dark">
                    <h3 class="text-success"> TRENDING</h3>
                    @foreach ($artikel as $item)
                    <div>
                        <a href="#" class="btn">
                            <p><b>{{ $x++ }}</b> {{ $item->judul_content }}</p>
                        </a>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="text-end">
                    <img src="{{ asset('Assets/Icon/icon - chat.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
