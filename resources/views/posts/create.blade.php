@extends('layout.base')
@section('title', 'إنشاء مقال')
@section('content')
<div class="py-5">
    <h1 class="text-center mb-5">انشاء مقال</h1>
<form action="/posts" method="post">
@include('layout.postform')
<button type="submit" class="btn btn-primary">انشاء</button>
</form>
</div>
@endsection