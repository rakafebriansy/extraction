{{-- @dd($posts) <?php //dd dump and die "var_dump();die;?>  --}}

@extends('layouts.main')

@section('container') 
<h1 class="mb-5">Halaman Blog Posts</h1>
    <article class="mb-5">
        @foreach ($posts as $post) <?php //Looping blade ?>
         <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>  
         <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>
@endsection

