@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src='{{$user->profile->profileImage()}}' class="rounded-circle w-100" alt='pfp' />
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <h1>{{ $user->username }}</h1>
                    <follow-button user-id='{{$user->id}}' follows='{{$follows}}'></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>    
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{postCount()}}</strong> posts</div>
                <div class="pr-5"><strong>{{followersCount()}}</strong> followers</div>
                <div class="pr-5"><strong>{{followingCount()}}</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title ?? ''}}</div>
        <div>{{$user->profile->description ?? ''}}</div>
        <div><a target='_blank' href="{{$user->profile->url ?? ''}}"><strong>{{$user->profile->url ?? ''}}</strong></a></div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{$post->id}}">
                    <img src='/storage/{{$post->image}}' width='80%' height='85%' alt='pic' />
                </a>
                
            </div>
        @endforeach
    </div>
</div>
@endsection
