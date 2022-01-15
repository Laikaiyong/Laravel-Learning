@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <h1>Add New Post</h1>
        </div>
        <div class="row mb-3">
            <label for="caption" class="col-md-4 col-form-label text-md-end">Post Caption</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">Post Image</label>

            <div class="col-md-6">
                <input type="file" class="form-control-file" id="image" name="image" required>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-2">
            <button class="btn btn-primary col-md-2 col-form-label">Add New Post</button>
        </div>
    </form>
</div>
@endsection