@extends('layouts/layoutsHome/layout')
@section('title', "B")
@section('contenido')

<div class="">
    <h1 class="">Categoria:{{$category->name}}</h1>

    @foreach ($posts as $post)

    <article>
        <img src="{{Storage::url($post->image->url)}}" alt="">

        <div>
            <h1>
                <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
            </h1>

            <div class="">
                {{$post->extract}}
            </div>
        </div>

        <div class="">
            @foreach ($post->tags as $tag)
            <a class="" href="">{{$tag->name}}</a>
            @endforeach

            <div class="">
                {{$posts->links()}}
            </div>

        </div>
    </article>
        
    @endforeach
</div>

@stop