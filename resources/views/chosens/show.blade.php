@extends('layouts.studentbase')

@section('content')

<div class="container py-3">
    <h2>{{ $user->subject->name }}</h2>
    <h3>{{ $user->subject->description }}</h3>
    <p>Code: {{ $user->subject->code }}</p>
    <p>Credit: {{ $user->subject->credit_value }}</p>
    <p>Creation: {{ $user->subject->created_at }}</p>
    <p>Last modification: {{ $user->subject->updated_at }}</p>
    <p>Students: {{ $user->count() }}</p>
    <p>Teacher: {{ $user->name }}</p>
    <p>Email: {{ $user->->email }}</p>

</div>
  <div class="container py-3">
  <h2>Classmate List:</h2>

  <table class="table table-warning">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
       @foreach($chosen->subject->students as $student)
        <tr>
          <td>{{ $student->name}}</td>
          <td>{{ $student->email}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
</div>




@endsection
