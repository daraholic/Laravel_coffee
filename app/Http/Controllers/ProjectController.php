<?php

namespace App\Http\Controllers;
use App\Models\Bean;
use App\Services\ProjectService;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $project;
    public function __construct(ProjectService $project)
    {
        $this->project = $project;
    }

    public function getProjectList(Request $request)
    {
        $all = $request->all;
        // dd($all);
        // $projectName = $request->projectName;
        // $nameSpace = $request ->nameSpace;
        
        // $validator = Validator::make($request->all(), [
        //     'all' => 'nullable',
        //     'projectName' => 'nullable',
        //     'nameSpace' => 'nullable',
        // ]);
        // if ($validator->fails()) {
        //     $errors = $validator->errors();

        //     return response()->json(['error' => $errors], 400);
        // }

        $projects = $this->project->search($request);
        return $projects;
        // return response()->view('index', ['data' => $projects]);
    }
}