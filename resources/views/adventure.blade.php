@extends('layouts.main')

@section('container')

<article>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Adventure Detail</h6>
                            <h1 class="display-4">{{ $adventure->title }}</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="https://source.unsplash.com/1366x770?{{ $adventure->category->name }}" alt="{{ $adventure->category->name }}">
                        <p>{!! $adventure->description !!}</p>
                        <a href="/adventure" class="d-block mt-3">Back to Adventures</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Adventure Features</h3>
                        @foreach ([
                            'Guide' => '<a href="/guides/'.$adventure->guide->username.'" class="text-white my-3">'.$adventure->guide->username.'</a>',
                            'Category' => '<a href="/categories/'.$adventure->category->slug.'" class="text-white my-3">'.$adventure->category->name.'</a>',
                            'Travel Estimates' => $adventure->duration.' Hrs',
                            'Skill level' => $adventure->difficulty->name,
                            // 'Skill level' => '<a href="/difficulty/'.$adventure->difficulty->slug.'" class="your-custom-classes">'.$adventure->difficulty->name.'</a>',
                        ] as $label => $value)
                            <div class="d-flex justify-content-between border-bottom px-4">
                                <h6 class="text-white my-3">{{ $label }}</h6>
                                <h6 class="text-white my-3">{!! $value !!}</h6>
                            </div>
                        @endforeach
                        <h5 class="text-white py-3 px-4 m-0">Adventure Price: Rp. {{ $adventure->price }}</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="">Booking Now</a>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        @forelse ($otherAdventures as $recentAdventure)
                            <a class="d-flex align-items-center text-decoration-none mb-4" href="{{ url("/adventure/{$recentAdventure->slug}") }}">
                                <img class="img-fluid rounded" src="https://source.unsplash.com/80x80?{{ $recentAdventure->category->name }}" alt="{{ $recentAdventure->category->name }}">
                                <div class="pl-3">
                                    <h6>{{ $recentAdventure->title }}</h6>
                                    <div class="d-flex">
                                        <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>{{ $recentAdventure->guide->username }}</small>
                                        <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>{{ $recentAdventure->category->name }}</small>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p>No recent courses available.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

@endsection
