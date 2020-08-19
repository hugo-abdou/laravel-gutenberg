@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('errors.success')
            <button type="button"
                    class="btn btn-primary btn-lg btn-block"
                    data-toggle="collapse"
                    href="#collapseExample"
                    aria-expanded="false"
                    aria-controls="collapseExample"
            >Add New Post</button>
            <div class="collapse @if ( $errors->all() ) show @endif"
                 id="collapseExample">
                 @include('post._updateOrCreate')
            </div>
        </div>
        <div class="col-md-6">
            @include('post._allPosts')
        </div>
    </div>
</div>
@endsection