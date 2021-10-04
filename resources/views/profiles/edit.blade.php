@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype='multipart/form-data' method='post'>
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Edit Profile</h2>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <input id="title" type="text" value="{{ old('title') ?? $user->profile->title }}" class="form-control @error('title') is-invalid @enderror" name='title' autocomplete="title" autofocus>
                    {{--value="{{ old('title') ?? $user->profile->title }}" --}}
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                    <input id="description" type="text" value="{{ old('description') ?? $user->profile->description }}" class="form-control @error('description') is-invalid @enderror" name='description' autocomplete="description" autofocus>
                    {{--value="{{ old('description') ?? $user->profile->description }}"--}}
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>
                    <input id="url" type="text" value="{{ old('url') ?? $user->profile->url }}" class="form-control @error('url') is-invalid @enderror" name='url' autocomplete="url" autofocus>
                    {{--value="{{ old('url') ?? $user->profile->url }}"--}}
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="caption" class="col-md-4 col-form-label">Upload Profile Picture</label>
                    <input type="file" class="form-control-file" id="image" name='image'>
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
