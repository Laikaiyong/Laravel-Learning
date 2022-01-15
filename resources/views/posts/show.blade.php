@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div style="padding-right: 15px;">
                        <img 
                        src="{{ $post->user->profile->profileImage() }}" 
                        alt=""
                        class="w-100 rounded-circle"
                        style="max-width:40px;">
                    </div>
                    <div>
                        <div style="font-weight:bold;">
                            <a href="/profile/{{ $post->user_id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>

                <p>
                    <span class="text-dark" style="font-weight:bold;">
                        <a href="/profile/{{ $post->user_id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection