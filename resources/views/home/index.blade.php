@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/imitation_game.jpg')}}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/american_psycho.jpg')}}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/watchmen.jpg')}}" class="img-fluid rounded">
    </div>
</div>
@endsection