@extends('layouts.teacherbase')


@section('content')
<div class="container py-3">
    <h2>{{ $solution->name }}</h2>
    <a href="{{ route('solutions.edit', [ 'solution' => $solution->id ]) }}" class="btn btn-secondary">Evaluate</a>
    {{-- <form action="{{ route('tasks.destroy', [ 'task' => $task->id ]) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-warning">Delete</button>
      </form> --}}
    {{-- <a href="{{ route('subjects.tasks.create', [ 'subject' => $subject->id ]) }}" class="btn btn-secondary">New task</a> --}}
    <h6>Points:{{ $solution->points }}</h6>
    <p>Solution Text:</p><p>{{ $solution->solution_text}}</p>
    <h6>Date of evaluate:{{ $solution->evaluated_at}}</h6>
    <h6>Student Name:{{ $solution->student_name}}</h6>
    <h6>number of submitted solutions:23</h6>
    <h6>number of evaluated solutions:24</h6>



</div>
    </form>
@endsection
