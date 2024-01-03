@extends('layouts.main')
@section('container')
    <div class="row mx-0 justify-content-center">
        <div class="col-lg-8">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Adventures</h6>
                <h3 class="position-relative pb-2">{{ $title }} </h3>
            </div>
        </div>
    </div>

    {{-- Pengulangan Kolom --}}
    <div class="row">
        @foreach ($adventures as $adventure)
            <div class="col-lg-4 col-md-6 pb-4">
                <div class="card" style="position: relative;">
                    <a href="/categories/{{ $adventure->category->slug }}" class="text-white text-decoration-none position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7); z-index: 1;">{{ $adventure->category->name }}</a>
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="/adventure/{{ $adventure->slug }}">
                        <img class="img-fluid" src="https://source.unsplash.com/500x600?{{ $adventure->category->name }}" alt="{{ $adventure->category->name }}"/>
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">{{ $adventure->title }}</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i> {{ $adventure->guide->username }}</span>
                                    <span class="text-white"><i data-feather="compass"></i> {{ $adventure->difficulty->name }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
