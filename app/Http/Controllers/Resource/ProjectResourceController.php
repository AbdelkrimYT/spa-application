<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectResourceRequest;
use App\Models\Project;
use App\Models\Specialization;
use Illuminate\Http\Request;

class ProjectResourceController extends Controller
{
    public function index()
    {
        $projects = Project::all()->where('supervisor_id', auth()->guard('supervisor')->id());

        return view('supervisor.pages.project.index')->with([
            'projects' => $projects
        ]);
    }

    public function create()
    {
        $specializations = Specialization::all()->sortByDesc('level');

        return view('supervisor.pages.project.create', ['specializations' => $specializations]);
    }

    public function store(ProjectResourceRequest $request)
    {
        Project::create([
            'supervisor_id' => auth()->guard('supervisor')->id(),
            'title' => $request->title,
            'summary' => $request->summary,
            'keywords' => $request->keywords
        ])->specializations()->sync($request->specialization);

        return back()->with([]);
    }

    public function show(Project $project)
    {
        $specializations = Specialization::all()->sortByDesc('level');

        return view('supervisor.pages.project.show')->with([
            'project' => $project,
            'specializations' => $specializations
        ]);
    }

    public function edit(Project $project)
    {
        $specializations = Specialization::all()->sortByDesc('level');

        return view('supervisor.pages.project.edit')->with([
            'project' => $project,
            'specializations' => $specializations
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $project->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'keywords' => $request->keywords
        ]);

        $project->specializations()->sync($request->specialization);

        return back();
    }

    function destroy(Project $project)
    {
        $project->delete();

        return back();
    }
}
