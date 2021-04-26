@extends('layouts.teacherbase')

@section('content')
<div class="row">

    @foreach($subjects as $subject)
    <div class="col-sm-3 my-3">
        <div class="card h-100">
            <div class="card-body">
            <a style="font-size: 35px"  href="{{route('subjects.show', [ 'subject' => $subject->id ]) }}" class="card-title">{{ $subject['name'] }}</a>
            <h6 class="card-title">{{ $subject['code'] }}</h6>
            <h6 class="card-title">{{ $subject['credit_value'] }}</h6>
            <p class="card-text">{{ $subject['description'] }}</p>
            <p class="card-text"><small class="text-muted">{{ $subject['update_at'] }}</small></p>
          </div>
        </div>
      </div>
    @endforeach

    <div class="col-sm-3 my-3">
      <div class="card h-100">
        <a href="{{route('subjects.create')}}" class="btn btn-secondary h-100 pt-5">Create a new subject</a>
      </div>
    </div>

  </div>
@endsection
