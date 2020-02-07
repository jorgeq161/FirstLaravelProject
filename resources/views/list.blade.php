@extends('layout')

@section('header')

    <div class="title m-b-md content">
        View Projects
    </div>
    <div class="top-right links">
        <ul>
            <li><a href="/" title="">Home</a></li>
            <li><a href="add" title="">Add</a></li>
            <li><a href="list" title="">View</a></li>
            <li><a https://github.com/jorgeq161/FirstLaravelProject" title="">GitHub</a></li>
        </ul>
    </div>
@endsection

@section('content')

    <div>
        <ul class="display">
            @foreach ($projects as $project)
                <li>
                    <p>{{$project->id}}: <a href="/update/{{$project -> id}}">Description: {{$project -> description}} | Start date: {{$project -> start_date}} | End Date: {{$project -> end_date}}</a></p>
                </li>
            @endforeach
        </ul>

    </div>
@endsection
