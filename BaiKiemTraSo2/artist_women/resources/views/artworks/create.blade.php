@extends('layouts.app')
@section('title', 'Add new author')

@section('content')
    <h1 class="text-center my-3">Add New Artist</h1>
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

        <form action="{{route('artwork.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="artist_name" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div>
          <div class="mb-3 col">
              <label for="art_type" class="form-label">Art Type</label>
              <select name="art_type" id="art_type" class="form-select">
                  <option value="hoi hoa">Hội Họa</option>
                  <option value="am nhac">Âm nhạc</option>
                  <option value="van hoc">Văn học</option>
              </select>
          </div>

            <div class="mb-3 col">
                <label for="media_link" class="form-label">Media Link</label>
                <input type="text" id="media_link" name="media_link" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" id="cover_image" name="cover_image" class="form-control" required>
            </div>



            <div class="d-flex gap-2">
                <button class="btn btn-success">Create</button>
                <a class="btn btn-danger" href="{{route('home')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
