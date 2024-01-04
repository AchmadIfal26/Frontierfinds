@extends('layouts.main')
@section('container')
       <!-- Courses Start -->
       <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Adventure</h6>
                    <h1 class="display-4">Checkout New Releases Of Our Adventure</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            @foreach ($adventure as $adventureItem)
                <div class="courses-item position-relative">
                    <a href="/categories/{{ $adventureItem->category->slug }}" class="text-white text-decoration-none position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7); z-index: 1;">{{ $adventureItem->category->name }}</a>
                    <img class="img-fluid" src="https://source.unsplash.com/500x600?{{ $adventureItem->category->name }}" alt="">
                    <div class="courses-text">
                        <h4 class="text-center text-white px-3">{{ $adventureItem->title }}</h4>
                        <div class="border-top w-100 mt-3">
                            <div class="d-flex justify-content-between p-4">
                                <span class="text-white"><i class="fa fa-user mr-2"></i>{{ $adventureItem->guide->username }}</span>
                                <span class="text-white"><i data-feather="compass"></i> {{ $adventureItem->difficulty->name }}</span>
                            </div>
                        </div>
                        <div class="w-100 bg-white text-center p-4" >
                            <a class="btn btn-primary" href="{{ route('adventure.show', $adventureItem->id) }}">Adventure Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- Courses End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
