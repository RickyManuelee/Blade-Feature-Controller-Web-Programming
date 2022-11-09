@extends('layout/main')

@section('title', 'posts')

@section('container')
    <div class="container ml-5 mt-5">
        @foreach ( $posts as $post )
        <div class="card w-75 mb-5">
            <div class="card-body" style="background-color: #292929">
                <h3 class="card-title">{{ $post["title"] }}</h3>
                <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur facilis molestiae veniam maiores dolor, perferendis, hic, obcaecati eius laudantium cupiditate quis voluptate consequatur maxime voluptas reiciendis dicta? Numquam, aperiam debitis...</p>
                <a href="/posts/{{$post["slug"]}}" class="btn btn-primary mt-3">Read More...</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
