<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function edit($id){

        $project = Project::find($id);

        return view('update',['project' => $project]);

    }

    public function create(){
        //Gives a view to create a resource

        return view('add');
    }

    public function destroy($id){
        //delete a resource
        $project = Project::find($id);
        $project = \App\Project::where('id',$id)->delete();

        return redirect('/');

    }

    public function store(){
        //persist or commit above resource\

        request()->validate([
            'description' => ['required', 'min:1', 'max:60'], //quick validation through laravel for a minimum of a character and maximum of 60
            'start_date' => 'required', //always need a start date
        ]);

        $project = new Project();
        $project -> description = request('description');
        $project -> start_date = request('start_date');
        $project -> end_date = request('end_date');
        $project -> save();

        return redirect('/');
    }

    public function update($id){
        //persists or commit existing resource

        request()->validate([
            'description' => ['required', 'min:1', 'max:60'], //quick validation through laravel for a minimum of a character and maximum of 60
            'start_date' => 'required', //always need a start date
        ]);


        $project = Project::find($id);
        $project -> description = request('description');
        $project -> start_date = request('start_date');
        $project -> end_date = request('end_date');
        $project -> save();

        return redirect('/');

    }


}
