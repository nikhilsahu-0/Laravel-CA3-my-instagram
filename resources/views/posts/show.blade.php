@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="p-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width:30px">
                    </div>
                    <div>
                        <div><strong><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></strong></div>
                    </div>
                    <a href="#" class="p-2">Follow</a>
                </div>
                <hr>
                <p><span><strong><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></strong></span> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
