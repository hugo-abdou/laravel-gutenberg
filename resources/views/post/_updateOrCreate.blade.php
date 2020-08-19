<div class="card">
    <div class="card-header">
    {{ Route::currentRouteNamed('posts.edit') 
       ? 'Edit Post' : 'Add New Post' }}
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('posts.store') }}">
       @csrf

       @if ( Route::currentRouteNamed('posts.edit') )
        <input type="hidden" name="id" value="{{ $post->id }}">
       @endif

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text"
                   class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                   id="title"
                   name="title"
                   value="{{ Route::currentRouteNamed('posts.edit') 
                             ? $post->title : old('title') }}"
            >
            @include('errors.error', ['input' => 'title'])
        </div>
        <div class="form-group">
            <label for="full_text">Text</label>
            <textarea class="form-control {{ $errors->has('full_text') ? ' is-invalid' : '' }}"
                      name="full_text"
                      id="full_text" rows="3">{{ Route::currentRouteNamed('posts.edit') 
                                            ? $post->full_text : old('full_text') }}</textarea>
             @include('errors.error', ['input' => 'full_text'])
        </div>
        <button type="submit" class="btn btn-primary">
        {{ Route::currentRouteNamed('posts.edit') 
           ? 'Edit Post' : 'Add Post' }}</button>
      </form>
    </div>
</div>