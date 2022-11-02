@extends('home')

@section('title')
    DC COMICS - Home Page
@endsection

@section('main')
    <div class="d-flex">
    @foreach ($comics as $item)
    <div class="container_2">
        <h2>{{$item['title']}}</h2>
        <img src="{{$item['thumb']}}" alt="">
    </div>

    @endforeach
</div>
@endsection
