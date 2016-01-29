
@extends('layouts.master')


@section('content')

<div id="accordion">

    @foreach($repos as $repo)

    <a class="list-group-item">
        <h4 class="list-group-item-heading">{{ $repo['name'] }}</h4>
        <p class="list-group-item-text">{{ $repo['description'] }}</p>
        <div class="clearfix">
            <p class="list-group-item-text pull-right"> Open Issues <span  class="badge"> {{ $repo['open_issues'] }}</span></p>
        </div>
    </a>
    <div>
        <p>

        <h4 class="list-group-item-heading"> Title: {{ $title }}</h4>
        <p class="list-group-item-text"> Comments: {{ $body }}</p>


    </div>


    @endforeach
</div>

@endsection

