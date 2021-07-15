@extends('layouts.public')

@section('content')
<div class="clearfix">
    <h2 class="mb-5">Latest blog posts</h2>
</div>

@forelse ($posts as $post)
    <div class="blog-post pb-4">
        <h3 class="blog-post-title mb-4">
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </h3>
        <p class="blog-post-meta"><small>{{ $post->created_at->format('M d, Y h:i A') }} by <a href="#">{{ $post->owner->name }}</a></small></p>

        {{ $post->body }}
    </div>
@empty
    <p>No posts yet, com back soon</p>
@endforelse
@endsection
