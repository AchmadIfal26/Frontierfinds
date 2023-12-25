@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $adventure->title }}</h2>
        <h5>Guide by : {{ $adventure->guide }} in
            <a href="/categories/{{ $adventure->category->slug }}">{{ $adventure->category->name }}</a>
        </h5>
        <h6>Travel Estimates: {{ $adventure->duration }} Hrs</h6>
        <p>{!! $adventure->description !!}</p>
    </article>
    <a href="/adventure">Back to Adventures</a>
@endsection
