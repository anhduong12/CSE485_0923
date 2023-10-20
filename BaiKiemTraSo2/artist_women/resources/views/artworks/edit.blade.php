@extends('layouts.app')
@section('title', 'Add new author')

@section('content')
    <h1 class="text-center my-3">Edit New Artist</h1>
    <div class="container">
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Author</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('artwork.update',$artwork->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{$artwork->artist_name}}" id="name" name="artist_name" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="description" class="form-label">Description</label>
                <input type="text" value="{{$artwork->description}}" id="description" name="description" class="form-control" required>
            </div>
            <div class="mb-3 col">
                <label for="art_type" class="form-label">Art Type</label>
                <input type="text" value="{{$artwork->art_type}}" id="art_type" name="art_type" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="media_link" class="form-label">Media Link</label>
                <input type="text" value="{{$artwork->media_link}}" id="media_link" name="media_link" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" value="{{$artwork->cover_image}}" id="cover_image"  name="cover_image" class="form-control" required>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-success">Save</button>
                <a class="btn btn-danger" href="{{route('home')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
