@extends('layouts.app')

@section('content')
<div class="clearfix">
    <h2 class="mb-5">Welcome {{ Auth::user()->name }} - These are your posts</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-secondary float-right">Create a new post</a>
</div>

@forelse ($posts as $post)
    <div class="card my-2">
        <div class="card-body">

            <h4 class="card-title">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </h4>

            <p class="card-text">
                <small class="float-left">By: {{ $post->owner->name }}</small>
                <small class="float-right text-muted">{{ $post->created_at->format('M d, Y h:i A') }}</small>
            </p>
        </div>
    </div>
@empty
    <p>No posts yet, stay tuned!</p>
@endforelse
@endsection
