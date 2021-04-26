<?php

namespace App\Http\Controllers;

use App\Models\Solutions;
use App\Http\Requests\SolutionFormRequest;

class SolutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solutions  $solutions
     * @return \Illuminate\Http\Response
     */
    public function show(Solutions $solution)
    {
        return view('solutions.show', [
            'solution' => $solution
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solutions  $solutions
     * @return \Illuminate\Http\Response
     */
    public function edit(Solutions $solution)
    {
        return view('solutions.edit', [
            'solution' => $solution
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solutions  $solutions
     * @return \Illuminate\Http\Response
     */
    public function update(SolutionFormRequest $request, Solutions $solution)
    {
        $validated_data = $request->validated();
        $validated_data['evaluated_at'] = now();
        $solution->update($validated_data);

        //$task->filters()->sync($validated_data['filters'] ?? []);
        return redirect()->route('tasks.show', [ 'task' =>  $solution->tasks_id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solutions  $solutions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solutions $solutions)
    {
        //
    }
}
