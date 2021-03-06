@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <h1>Edit Profile</h1>
        </div>
        <div class="form-group row mb-3">
            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="url" class="col-md-4 col-form-label text-md-end">Url</label>

            <div class="col-md-6">
                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">Profile Image</label>

            <div class="col-md-6">
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-2">
            <button class="btn btn-primary col-md-2 col-form-label">Save Profile</button>
        </div>
    </form>
</div>
@endsection
