@extends('layouts.app')
@section('title', 'Add new author')

@section('content')
    <h1 class="text-center my-3">Add New Author</h1>
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

        <form action="{{route('author.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
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
                <a class="btn btn-danger" href="{{route('home')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
