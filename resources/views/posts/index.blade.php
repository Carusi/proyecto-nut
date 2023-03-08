@extends('layouts/layoutsHome/layout')
@section('title', "Blog")
@section('contenido')

<div class="container   py-8">
    <div class="grid grid-cols-3 gap-6">
        @foreach ($posts as $post)

        <article class=" @if($loop->first) col-span-2 @endif " style=" background-image: url({{Storage::url($post->image->url)}});">
            <div class="">

                <div>
                    @foreach ($post->tags as $tag)
                            <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600">{{$tag->name}}</a> 
                    @endforeach
                </div>
                <h1>
                    <a href="{{route('posts.show', $post)}}">
                        {{$post->name}}
                    </a>
                </h1>
            </div>
           
        </article>
            
        @endforeach

    </div>

    <div class="">
        {{$posts->links()}}

    </div>

</div>


@stop
