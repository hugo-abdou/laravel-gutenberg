@forelse ($posts as $post)
<div class="card my-4">
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-text">{!! $post->full_text !!}</p>
        <div class="d-flex">
            <a href="#" class="btn btn-primary">Read more &rarr;</a>
            <a href="{{ route('posts.edit', $post) }}"
               class="btn btn-primary ml-2">Edit</a>
            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ml-2">
                Delete
                </button>
            </form>
        </div>
    </div>
    <div class="card-footer text-muted">
        <i class="fas fa-calendar-alt"></i>
        Created/Updated 
        {{ Carbon\Carbon::parse($post->created_at)->format('d.m.Y H:m') }}
    </div>
</div>
@empty
    <div class="alert alert-warning mt-3" role="alert">
      No posts, please create first post
    </div>
@endforelse

{{ $posts->links() }}