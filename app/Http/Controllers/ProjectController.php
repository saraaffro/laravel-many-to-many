<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project :: all();

        return view('pages.projects.index', compact('projects'));
    }

    public function create() {

        $types = Type :: all();
        $technologies = Technology :: all();

        return view('pages.projects.create', compact('types', 'technologies'));
    }

    public function store(Request $request) {

        $data = $request -> all();

        $type = Type :: find($data['type_id']);

        $project = new Project();

        $project -> title = $data['title'];
        $project -> description = $data['description'];
        $project -> date = $data['date'];

        $project -> type() -> associate($type);

        $project -> save();

        $project -> technologies() -> attach($data['technology_id']);

        return redirect() -> route('project.index');
    }
}
