@extends('layout.base')
@section('title', $post->title)

@section('content')
<div class="pb-5 mb-5">
    <div class="d-flex justify-content-between mb-5 pe-5">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">تعديل</a>
        <form action="/posts/{{ $post->id }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-primary">حذف</button>
        </form>
    </div>
    <h1>
        {{ $post->title }}
    </h1>
    <p class="my-3">{{ $post->body }}</p>
    <h4>
        {{ $post->author }}
    </h4>
</div>
<br>
<h5 class="mb-3"><u>التعليقات</u></h5>

@foreach ($comments as $c)
<div class="py-3">
    <hr>
    <h4>
        {{ $c->name }}
    </h4>
        <p>{{$c->body}}</p>
    </div>
    <div>
        <form action="/comments/{{$c->id}}" method="post">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" value="{{ $post->id }}">
        <button type="submit" class="btn btn-primary">حذف</button>
        </form>
    </div>
@endforeach
    <div class="py-5">
        <form action="/post/{{ $post->id }}/comments" method="POST">
            @include('layout.commentform')
            <button type="submit" class="btn btn-primary">ارسال</button>
        </form>
    </div>
@endsection