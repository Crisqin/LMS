@extends('layouts.teacherbase')


@section('content')
<div class="container py-3">
    <h2>{{ $subjects->name }}</h2>
    <a href="{{ route('subjects.edit', [ 'subjects' => $subjects->id ]) }}" class="btn btn-secondary">Edit</a>
    <form action="{{ route('subjects.destroy', [ 'subjects' => $subjects->id ]) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-warning">Delete</button>
      </form>
    <a href="{{ route('subjects.tasks.create', [ 'subjects' => $subjects->id ]) }}" class="btn btn-secondary">New task</a>
    <h6>Code:{{ $subjects->code }}</h6>
    <h6>Credit:{{ $subjects->credit_value }}</h6>
    <p>description:</p><p>{{ $subjects->description }}</p>
    <h6>Date of creation:{{ $subjects->created_at }}</h6>
    <h6>Last modification:{{ $subjects->updated_at }}</h6>
    <h6>number of students:2</h6>
    <h6>Students List:</h6>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Joe</td>
            <td>joe@gmail.com</td>
          </tr>
          <tr>
            <td>Jacob</td>
            <td>Jacob@gmail.com</td>
          </tr>
        </tbody>
      </table>
      <h6>Tasks List:</h6>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">TaskName</th>
            <th scope="col">Point</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($subjects->tasks as $task)
          <tr>
            <td><a href="{{ route('tasks.show', [ 'task' => $task->id ]) }}" class="card-title">{{ $task->name }}</a></td>
            <td>{{ $task->points }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>


</div>
    </form>
@endsection
