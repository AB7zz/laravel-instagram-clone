@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 border-right">
            <img src="/storage/{{$post->image}}" alt="post" class='w-60'>
        </div>
        <div class="col-4">
            <div class="">
                <div class='d-flex align-items-center'>
                    <div class='pr-3'>
                        <img src="{{$post->user->profile->profileImage()}}" class='rounded-circle w-100' style='max-width: 50px;' alt="">
                    </div>
                    <div>
                        <a class='font-weight-bold' style='color: black;' href='/profile/{{$post->user->id}}'>{{$post->user->username}}</a>
                    </div>
                </div>
                <hr>
                <div class='d-flex mt-3'>
                    <a class='pr-3 font-weight-bold' style='color: black;' href='/profile/{{$post->user->id}}'>{{$post->user->username}}</a>
                    <p>{{$post->caption}}</p>
                    <a href="#" class='pl-3'>Follow</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
