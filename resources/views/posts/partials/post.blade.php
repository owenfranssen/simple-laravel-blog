<div class="card pb-4">
  <div class="card-body">
    <h4 class="card-title">
    	{{ $post->title }}
    </h4>
    <small class="text-muted mb-2">
    	Posted by: <b>{{ $post->owner->name }}</b> on {{ $post->created_at->format('M d, Y H:i:s') }}
    </small>
    <p class="card-text">
    	{{ $post->body }}
    </p>
  </div>
</div>