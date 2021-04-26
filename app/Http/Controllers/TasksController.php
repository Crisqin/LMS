<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Subjects;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Subjects $subject)
    {
        return view('tasks.create',[
            'subject_id'=>$subject->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskFormRequest $request,Subjects $subject)
    {
        $validated_data = $request->validated();

        $task = $subject->tasks()->create($validated_data);

        //$task->filters()->sync($validated_data['filters'] ?? []);
        return redirect()->route('subjects.show', [ 'subject' => $task->subjects_id ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(TaskFormRequest $request, Tasks $task)
    {
        $validated_data = $request->validated();

        $task->update($validated_data);
        //$task->filters()->sync($validated_data['filters'] ?? []);
        return redirect()->route('tasks.show', [ 'task' =>  $task->id ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}
