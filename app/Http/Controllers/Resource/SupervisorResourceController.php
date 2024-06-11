<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupervisorResourceRequest;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class SupervisorResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supervisors = Supervisor::all();

        return view('admin.pages.supervisor.index')
            ->with('supervisors', $supervisors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.supervisor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupervisorResourceRequest $request)
    {
        Supervisor::create($request->all());

        return back()->with('success', __("Supervisor \"$request->name\" created successfully."));
    }

    /**
     * Display the specified resource.
     */
    public function show(Supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supervisor $supervisor)
    {
        return view('admin.pages.supervisor.edit')->with('supervisor', $supervisor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupervisorResourceRequest $request, Supervisor $supervisor)
    {
        $supervisor->update($request->all());

        return back()->with('success', __("Supervisor updated successfully."));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
        //
    }
}
