@extends('layouts.teacherbase')


@section('content')
<div class="container py-3">
    <h2>{{ $task->name }}</h2>
    <a href="{{ route('tasks.edit', [ 'task' => $task->id ]) }}" class="btn btn-secondary">Edit</a>
    {{-- <form action="{{ route('tasks.destroy', [ 'task' => $task->id ]) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-warning">Delete</button>
      </form> --}}
    {{-- <a href="{{ route('subjects.tasks.create', [ 'subject' => $subject->id ]) }}" class="btn btn-secondary">New task</a> --}}
    <h6>Points:{{ $task->points }}</h6>
    <p>description:</p><p>{{ $task->description }}</p>
    <h6>Date of creation:{{ $task->created_at }}</h6>
    <h6>Last modification:{{ $task->updated_at }}</h6>
    <h6>No. of submitted solutions:{{\DB::table('solutions')->where('tasks_id','=',$task->id)->where('solution_statue','=','submitted')->count()}}</h6>
    <h6>No. of evaluated solutions:{{\DB::table('solutions')->where('tasks_id','=',$task->id)->where('solution_statue','=','evaluated')->count()}}</h6>
    <h6>Solutions List:</h6>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Points</th>
            <th scope="col">Date of submission</th>
            <th scope="col">Date of evaluated</th>
            <th scope="col">Evaluate</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($task->solutions as $solution)
          <tr>
            <td>{{ $solution->student_name}}</td>
            @foreach($users=\DB::table('users')->where('name','=',$solution->student_name)->get() as $user)
                <td>{{$user->email}}</td>
            @endforeach
            <td>{{ $solution->points}}</td>
            <td>{{ $solution->updated_at}}</td>
            <td>{{ $solution->evaluated_at}}</td>
            @if(($solution->points==null))
            <td><a href="{{ route('solutions.edit', [ 'solution' => $solution->id ]) }}" class="btn btn-secondary">Evaluate</a></td>
          @endif
            </tr>
          @endforeach
        </tbody>
      </table>

</div>
    </form>
@endsection
