
@extends('layouts.master')


@section('content')

<table>
    <tr>

        <td> 
            <div>



                <h4>Filter by Assignment</h4>
                <input id="textbox" type="text" />
                <select id="select">
                    <option class="1" value="1">1</option>
                    
                </select>

            </div>
        </td>

        <td>

            <div>

                <h4>Filter by Label</h4>
                <input id="textbox" type="text" />
                <select id="select">
                    <option class="1" value="1">1</option>
                    
                </select>

            </div>
        </td>

        <td>

            <div>

                <h4>Filter by Milestone</h4>
                <input id="textbox" type="text" />
                <select id="select">
                    <option class="1" value="1">1</option>
                   
                    
                </select>

            </div>
        </td>

    </tr>

</table>
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

        <div class="form-group">
            <label for="comment">Leave Comment</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
            <button type="button" class="btn btn-success" href="{{URL::to('/comment')}}">Save</button>

        </div>



    </div>


    @endforeach
</div>

@endsection

