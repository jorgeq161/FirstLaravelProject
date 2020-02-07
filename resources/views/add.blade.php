@extends('layout')

@section('header')

    <div class="title m-b-md content">
        Add a Project
    </div>
    <div class="top-right links">
        <ul>
            <li><a href="/" title="">Home</a></li>
            <li><a href="add" title="">Add</a></li>
            <li><a href="list" title="">View</a></li>
            <li><a href="http://github.com/laravel/laravel" title="">GitHub</a></li>
        </ul>
    </div>
@endsection

@section('content')

    <div class="content">
        <div class="subtitle">
            <h1>Please enter the following:</h1>{{--subtitle--}}
        </div>

        <form method="POST" action="/add">
            @csrf
            <div class="field">
                <label class="input {{$errors->has('description')? 'is-danger':''}}"
                       for="description">Description</label> {{--handling errors inline--}}

                <div class="control">{{--we are about to obtain the input for the description of the project--}}
                    <textarea  name="description"
                               style="font-size:14pt;min-width:22%;height: 20%;"
                               value="{{old ('description') }}"
                               class="input" type="text" required></textarea>{{--description required--}}
                    <p><br></p>
                </div>
            </div>

            <div class="field">
                <label class="label" for="start_date">Start Date</label>{{--about to obtain the input for the start date--}}
                <input type="datetime-local" name="start_date"
                       value="date('Y-m-d\H:i:s',strtotime($yourPassedVariableToView))}}" required>{{--start date required--}}
                <p class="help is-danger">{{$errors->first('start_date')}}<br></p> {{--handling error before it leaves--}}
            </div>

            <div class="field">
                <label class="label" for="end_date">End Date</label>{{--obtaining input for the end date--}}
                <input type="datetime-local" name="end_date" value="date('Y-m-d\H:i:s',strtotime($yourPassedVariableToView))}}">
                <p><br></p>
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

    </div>

@endsection
