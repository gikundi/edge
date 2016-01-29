
@extends('layouts.master')

@section('content')

<div class="list-group">
    @foreach($repos as $repo)
    <a class="list-group-item" href="/finder?repo={{ $repo['name'] }}">
        <h4 class="list-group-item-heading">{{ $repo['name'] }}</h4>
        <p class="list-group-item-text">{{ $repo['description'] }}</p>
        <div class="clearfix">
        <p class="list-group-item-text pull-right"> Open Issues <span  class="badge"> {{ $repo['open_issues'] }}</span></p>
        </div>
    </a>
    @endforeach

</div>

@endsection