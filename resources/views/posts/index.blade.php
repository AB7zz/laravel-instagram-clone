@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="card col-12">
            <div class="col-12">
                <div class='d-flex mb-3 align-items-center'>
                    <div class='pr-3'>
                        <img src="{{$post->user->profile->profileImage()}}" class='mt-3 rounded-circle w-100' style='max-width: 40px;' alt="">
                    </div>
                    <div>
                        <a class='font-weight-bold' style='color: black;' href='/profile/{{$post->user->id}}'>{{$post->user->username}}</a>
                    </div>
                </div>
                <img src="/storage/{{$post->image}}" alt="post" style='width: 1000px;'>
            </div>
            <div class="col-4">
                <div class="">
                    <div class='d-flex mt-3'>
                        <a class='pr-3 font-weight-bold' style='color: black;' href='/profile/{{$post->user->id}}'>{{$post->user->username}}</a>
                        <p>{{$post->caption}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
