@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img 
            src="{{ $user->profile->profileImage() }}" 
            alt=""
            class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-">
                <h3>{{ $user->username }}</h3>

                <follow-button 
                    user-id="{{ $user->id }}"
                    follows="{{ $follows }}"></follow-button>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            
            <div class="d-flex">
                <div style="padding-right:20px;">
                    <strong>{{ $postCount }}</strong> posts
                </div>
                <div style="padding-right:20px;">
                    <strong>{{ $followersCount }}</strong> followers
                </div>
                <div style="padding-right:20px;">
                    <strong>{{ $followingCount }}</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{!! nl2br(e($user->profile->description)) !!}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pt-4">
                <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" 
                class="w-100"alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
