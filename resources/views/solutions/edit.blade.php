@extends('layouts.teacherbase')

@section('content')
    <div class="container py-3">
      <h2>Evaluate solution</h2>
      <form action="{{ route('solutions.update', [ 'solution' => $solution->id ]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">

            <div class="form-group">
                <label for="description">Description</label>
                @foreach($tasks=\DB::table('tasks')->where('id','=',$solution->tasks_id)->get() as $task)
                <textarea name="description" disabled="true" class="form-control @error('description') is-invalid @enderror"
                    id="description" rows="3">{{ old('description', $task->description) }}</textarea>
                    @endforeach
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

          <label for="solution_text">Solution text</label>
          <input type="text" disabled="true" class="form-control @error('solution_text') is-invalid @enderror" name="solution_text" id="solution_text" placeholder="" value="{{ old('name', $solution->solution_text) }}">
          @error('solution_text')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="points">solution point</label>
          <input name="points"  type="text" class="form-control @error('points') is-invalid @enderror" id="points" placeholder="" value="{{ old('points', $solution->points) }}">

          @error('points')
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
