@extends('layout/main')

@section('title', 'post')

@section('container')
    <div class="container mt-5">
        <article>
            <h3>{{ $post["title"] }}</h3>
            <h6> by: {{ $post["author"] }}</h6>
            <p>{{ $post["desc"] }}</p>
        </article>

        <a href="/posts" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
