@extends('layout')

@section('header')

    <div class="title m-b-md content" xmlns:>
        Update a Project
    </div>
        <div class="top-right links">{{--side menu links--}}
                    <ul>
                        <li><a href="/" title="">Home</a></li>
                        <li><a href="/add" title="">Add</a></li>
                        <li><a href="/list" title="">View</a></li>
                        <li><a href="https://github.com/jorgeq161/FirstLaravelProject" title="">GitHub</a></li>
                    </ul>
        </div>
@endsection

@section('content')

    <div class="content">
        <div class="subtitle">
            <h1>Please enter the following:</h1>
        </div>

        <form method="POST" action="/update/{{$project -> id}}">
            @method('PUT') {{--sending hidden PUT as it won't be accepted otherwise--}}
            @csrf
            <div class="field">
                <label class="input" for="description">Description</label>

                <div class="control">
                    <textarea  name="description"
                               style="font-size:14pt;min-width:22%;height:20%;"
                               value="{{old ('description') }}"
                               class="input" type="text" required>{{$project -> description}}</textarea>{{--description required--}}
                    <p class="help is-danger">{{$errors->first('description')}}<br></p> {{--handling error before it leaves--}}
                </div>
            </div>

            <div class="field">
                <label class="label" for="start_date" required>Start Date (Previously: {{$project -> start_date}})</label>{{--start date required--}}
                <input type="datetime-local" name="start_date" {{--value=date('Y-m-d\TH:i',{{$project -> start_date}}--}}>
                <p class="help is-danger">{{$errors->first('start_date')}}<br></p> {{--handling error separately instead of inline--}}
            </div>

            <div class="field">
                <label class="label" for="end_date">End Date (Previously: {{$project -> end_date}})</label>{{--obtaining end date--}}
                <input type="datetime-local" name="end_date" {{--value=date('Y-m-d\TH:i',{{$project -> end_date}} --}}>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="Submit">Submit</button>{{--submission button--}}
                </div>

                <div class="control">
                    <button class="button is-text">Cancel</button>{{--cancel button--}}
                </div>
            </div>

        </form>

        <form method="POST" action="/update/{{$project -> id}}">
            @method('DELETE')
            @csrf

            <input class="btn btn-danger"  value="DELETE" type="submit" style="width:100px">
        </form>
    </div>


@endsection
