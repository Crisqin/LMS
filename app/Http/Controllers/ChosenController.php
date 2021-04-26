<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Chosen;
use App\Http\Requests\ChosenFormRequest;
use App\Models\User;
use App\Models\Subject;

class ChosenController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Chosen::class, 'chosen');
    }

    public function index()
    {
        return view('chosens.index', [
            'chosens' => Auth::user()->chosens
        ]);
    }

    public function show(Chosen $chosen)
    {
        return view('chosens.show', [
            'chosen' => $chosen
        ]);
    }
    public function create()
    {
        return view('chosens.create');
    }


    public function edit(Chosen $chosen)
    {
        return view('chosens.edit', [
            'chosen' => $chosen
        ]);
    }

    public function update(Chosen $chosen, ChosenFormRequest $request)
    {
        $validated_data = $request->validated();

        $chosen->update($validated_data);

        return redirect()->route('chosens.show', [ 'chosen' => $chosen->id ]);
    }

    public function store(Chosen $chosen)
    {
        $validated_data['subject_id'] = $chosen->subject();
        $validated_data['user_id'] = Auth::id();
        dd($validated_data);
        chosen::create($validated_data);

        return redirect()->route('chosens.index');
    }

    public function destroy(Chosen $chosen)
    {
        $chosen->delete();
        return redirect()->route('chosens.index');
    }


}
