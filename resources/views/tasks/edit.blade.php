@extends('layouts.teacherbase')

@section('content')
    <div class="container py-3">
      <h2>Edit task</h2>
      <form action="{{ route('tasks.update', [ 'task' => $task->id ]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Task name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="" value="{{ old('name', $task->name) }}">

          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="points">Task point</label>
          <input name="points" type="text" class="form-control @error('points') is-invalid @enderror" id="points" placeholder="" value="{{ old('points', $task->points) }}">

          @error('points')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                id="description" rows="3">{{ old('description', $task->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update task</button>
        </div>

      </form>
    </div>
    @endsection
