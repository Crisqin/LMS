@extends('layouts.studentbase')

@section('content')

<div class="row">
@foreach($chosens as $chosen)
  <div class="col-sm-3 my-3">
    <div style="background:rgb(224, 128, 39); color:#FFF)">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">{{ $chosen['subject_name'] }}</h5>
        <p class="card-text">{{ $chosen['description'] }}</p>
        <p class="card-text">Teacher: {{ $chosen->user['name'] }}</p>
        <p class="card-text"><small class="text-muted">Code: {{ $chosen['subject_code']}}, Credit:{{$chosen['credit_value']}}</small></p>
       <a href="{{route('chosens.show', [ 'chosen' => $chosen]) }}" class="btn btn-primary">Open</a>
        <form action="{{ route('chosens.destroy', [ 'chosen' => $chosen->id ]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endforeach

        <div class="col-sm-3 my-3">
            <div class="card h-100">
              <a href="{{route('chosens.create')}}" class="btn btn-secondary h-100 pt-5">Register a new subject</a>

            </div>
    </div>
    @endsection
