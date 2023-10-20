@extends('layouts.app')
@section('title', 'Add new author')

@section('content')
    <h1 class="text-center my-3">Add New Book</h1>
    <div class="container">
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Book</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('book.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3 col">
                <label for="author_id" class="form-label">Author ID</label>
                <select name="author_id" id="author_id" class="form-select">
                    @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>

{{--                        @foreach($authors as $author)--}}
{{--                            <option {{ $author->id == $id ? 'selected' : '' }} value="{{ $author->id }}">{{ $author->name }}</option>--}}
{{--                        @endforeach--}}


                    @endforeach
                </select>
{{--                <input type="text" id="author_id" name="author_id" class="form-control" required>--}}
            </div>

            {{--            <div class="mb-3 col">--}}
            {{--                <label for="Description" class="form-label">Description</label>--}}
            {{--                <textarea type="text"  rows="2" id="Description" name="Description" class="form-control" required></textarea>--}}
            {{--            </div>--}}

            {{--            <div class="mb-3 col">--}}
            {{--                <label for="start_date" class="form-label">Start Date</label>--}}
            {{--                <input type="date" id="start_date" name="start_date" class="form-control" required>--}}
            {{--            </div>--}}

            {{--            <div class="mb-3 col">--}}
            {{--                <label for="start_end" class="form-label">Start End</label>--}}
            {{--                <input type="date" id="start_end" name="start_end" class="form-control" required>--}}
            {{--            </div>--}}

            <div class="d-flex gap-2">
                <button class="btn btn-success">Create</button>
                <a class="btn btn-danger" href="{{route('book.index')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
