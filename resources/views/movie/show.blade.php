@extends('layouts.app')
@section('title',$viewData["title"])
@section('subtitle',$viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/storage/'.$viewData["movie"]->getImage()) }}" class=" img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["movie"]->getName() }} (Rating: ☆ /5)
                    {{-- {{ $viewData["movie"]->getStar() }} --}}
                </h5>
                <p class="card-text">{{ $viewData["movie"]->getDescription() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection