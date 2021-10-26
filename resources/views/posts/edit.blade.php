@extends('layout.base')
@section('title', 'تعديل المقال {{ $post-title }}')
@section('content')
<div class="py-5">
<form action="/posts/{{ $post->id }}" method="post">
    @method('PATCH')
@include('layout.postform')

<button type="submit" class="btn btn-primary">حفظ</button>
</form>
</div>
@endsection