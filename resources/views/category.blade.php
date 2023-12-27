@extends('layouts.main')
@section('container')
    <h1 class="">Adventures Categories: {{ $category }}</h1>
    @foreach ($adventures as $adventure)
        <article class="mb-5">
            <h2>
                <a href="/adventure/{{ $adventure->slug }}">{{ $adventure->title }}</a>
            </h2>
            {{-- <h5>Guide by : <a href="/guides/{{ $adventure->guide->username }}"></h5> --}}
            <h6>Duration Adventure : {{ $adventure->duration }} Hrs</h6>
            <p style="color: black">{{ $adventure->excerpt }}</p>
            <a href="/adventure/{{ $adventure->slug }}">Read More...</a>
        </article>
    @endforeach
@endsection
