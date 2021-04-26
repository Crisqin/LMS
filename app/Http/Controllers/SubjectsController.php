<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SubjectFormRequest;

class SubjectsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Subjects::class, 'subjects');
    }

    public function index()
    {
        return view('subjects.index', [
            'subjects' => Auth::user()->subjects
        ]);
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(SubjectFormRequest $request)
    {
        $validated_data = $request->validated();
        $validated_data['user_id'] = Auth::id();
        Subjects::create($validated_data);

        return redirect()->route('subjects.index');
    }

    public function show(Subjects $subjects)
    {
        return view('subjects.show', [
            'subjects' => $subjects
        ]);
    }

    public function edit(Subjects $subjects)
    {
        dd($subjects);
        return view('subjects.edit', [
            'subjects' => $subjects
        ]);

    }

    public function update(SubjectFormRequest $request, Subjects $subjects)
    {
        $validated_data = $request->validated();
        $subjects->update($validated_data);


        return redirect()->route('subjects.show', [ 'subjects' => $subjects->id ]);
    }

    public function destroy(Subjects $subjects)
    {
        $subjects->delete();
        return redirect()->route('subjects.index');
    }
}
