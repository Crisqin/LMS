@extends('layouts.studentbase')


@section('content')
  <h2>Register subject</h2>
    @csrf

  <div class="container py-3">
    <h2>Subject List:</h2>

    <table class="table table-warning">
        <thead>
          <tr>
            <th scope="col">Subject</th>
            <th scope="col">Desrciption</th>
            <th scope="col">Code</th>
            <th scope="col">Credit vaule</th>
            <th scope="col">Teacher name</th>
            <th scope="col"> Register</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($all=\DB::table('subjects')->get() as $a)
            <tr>
                <td>{{ $a->name}}</a></td>
                <td>{{ $a->description}}</a></td>
                <td>{{ $a->code}}</a></td>
                <td>{{ $a->credit_value}}</a></td>
                @foreach($users=\DB::table('users')->where('id','=',$a->user_id)->get() as $user)
                <td>{{$user->name}}</td>
                @endforeach
                <td><a href="{{ route('chosen.store', [ 'subject_id' => $a->id ]) }}" class="btn btn-primary">Register</a></td>
             </tr>
        @endforeach
        </tbody>

    </table>
    </div>
@endsection
