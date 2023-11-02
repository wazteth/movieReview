@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach ($viewData["movies"] as $movie )
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ asset('/storage/'.$movie->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('movie.show', ['id'=>$movie->getId()]) }}" class="btn bg-primary text-white">
                    {{ $movie->getName() }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection