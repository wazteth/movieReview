@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Create Movies
    </div>
    <div class="card-body">
        @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error )
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{ route('admin.movie.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Manage Movies
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["movies"] as $movie )
                <tr>
                    <td>{{ $movie->getId() }}</td>
                    <td>{{ $movie->getImage() }}</td>
                    <td>{{ $movie->getName() }}</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection