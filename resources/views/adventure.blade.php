@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $adventure["title"] }}</h2>
        <h5>Guide by: {{ $adventure["guide"] }}</h5>
        <h6>{{ $adventure["duration"] }}</h6>
        <p>{{ $adventure["description"] }}</p>
    </article>
    <a href="/adventure">Back to Adventures</a>
@endsection
