@extends('layouts.public')

@section('content')
<div class="clearfix">
    <h2 class="float-left">Latest blog posts</h2>
</div>

@forelse ($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->format('M d, Y h:i A') }} by <a href="#">{{ $post->owner->name }}</a></p>

        {{ $post->body }}
    </div>
@empty
    <p>No posts yet, com back soon</p>
@endforelse
@endsection
