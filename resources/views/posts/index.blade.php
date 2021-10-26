@extends('layout.base')
@section('title', 'مدونة درس لارافيل - الرئيسية')
@section('content')
    
<a href="/posts/create" class="btn btn-primary">انشاء مقال</a>
@foreach ($posts as $post)
<div class="mt-4">
            <a href="/posts/{{ $post->id }}">
                <h3>{{ $post->title }}</h3>
            </a>
            <p>
                {{ $post->body }}
            </p>
            <h5>
                بقلم : {{ $post->author }}
            </h5>
            <hr>
        </div>
        @endforeach
    @endsection