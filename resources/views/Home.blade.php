@extends('layout/main')

@section('title', 'home')

@section('container')
<img src="https://source.unsplash.com/2000x300?view" class="img-fluid" alt="...">
<img src="https://source.unsplash.com/200x200?man" class="rounded-circle mx-auto d-block mt-5" alt="...">
    <figure class="text-center">
        <h1 class="mt-5">Welcome!</h1>
        <blockquote class="blockquote">
            <p>Website ini berisikan informasi saya</p>
        </blockquote>
        <figcaption class="blockquote-footer mb-5">
            Nama saya <cite title="Source Title">Ricky Manuelee</cite>
        </figcaption>
    </figure>

@endsection
