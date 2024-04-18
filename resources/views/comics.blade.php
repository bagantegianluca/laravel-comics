@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="title">Current series</h3>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['title']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection