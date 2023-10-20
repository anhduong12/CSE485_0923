@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="container">
        <!-- Thông báo thêm thành công -->
        @if(session('success'))
            <div class="toast align-items-center text-white bg-success border-0 mx-auto mt-3" role="alert"
                 aria-live="assertive" aria-atomic="true" id="myToast">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                </div>
            </div>
        @endif
        <!-- Title -->
        <div class="d-flex align-items-center">
            <h3 class="text-center text-success my-3">Artwork
            </h3>
            <a href="{{route('artwork.create')}}" class="btn btn-success ms-auto"> <i class="bi bi-plus-lg"></i> Add New artwork</a>
        </div>

        <!-- Bảng hiển thị danh sách phòng ban -->
        <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Art Name</th>
                <th scope="col">Description</th>
                <th scope="col">Art Type</th>
                <th scope="col">Media Link</th>
                <th scope="col">Cover Image</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            ?>
            @foreach($artworks as $artwork)
                <tr>
                    <th scope="row" class="text-center">{{$i++}}</th>
                    <td class="text-center">{{ $artwork->artist_name }}</td>
                    <td class="text-center">{{ $artwork->description }}</td>
                    <td class="text-center">{{ $artwork->art_type }}</td>
                    <td class="text-center">{{ $artwork->media_link }}</td>
                    <td class="text-center">{{ $artwork->cover_image }}</td>

                    <td class="d-flex justify-content-center gap-2">
                        <a href="{{route('artwork.edit',$artwork->id)}}" class="btn btn-warning"> <i class="bi bi-pencil-fill"></i> </a>
                        <form action="{{route('artwork.delete',$artwork->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-dark"
                                    onclick="return confirm('Are you sure you want to delete?')"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
