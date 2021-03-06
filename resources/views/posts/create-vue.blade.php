@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <a href="{{route('posts.index')}}">{{__('See all posts')}}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12" id="create-post">
                <create></create>
            </div>
        </div>
    </div>

@endsection

@push('page-scripts')
    {!! Html::script('js/posts-create.js') !!}
@endpush