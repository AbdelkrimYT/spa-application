<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecializationRequest;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specializations = Specialization::all();

        return view('admin.pages.specialization.index')
            ->with('specializations', $specializations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.specialization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecializationRequest $request)
    {
        Specialization::create($request->all());

        $full_nme = "$request->level / $request->title";

        return redirect()->back()
            ->with('success', __("Specialization $full_nme created successfully."));
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialization $specialization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialization $specialization)
    {
        return view('admin.pages.specialization.edit')
            ->with('specialization', $specialization);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecializationRequest $request, Specialization $specialization)
    {
        $specialization->update($request->all());

        return back()->with('success', __("Specialization updated successfully."));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialization $specialization)
    {
        $specialization->delete();

        return back();
    }
}
