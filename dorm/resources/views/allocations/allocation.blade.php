@extends('layouts.app')

@section('content')

<div class="card">

<h2>Assign Room</h2>

<form method="POST" action="/allocations">

@csrf

Student

<select name="student_id">

@foreach($students as $student)

<option value="{{$student->student_id}}">
{{$student->student_number}}
</option>

@endforeach

</select>

<br><br>

Room

<select name="room_id">

@foreach($rooms as $room)

<option value="{{$room->room_id}}">
Room {{$room->room_number}}
</option>

@endforeach

</select>

<br><br>

Date Assigned

<input type="date" name="date_assigned">

<br><br>

Status

<select name="status">

<option value="active">Active</option>
<option value="inactive">Inactive</option>

</select>

<br><br>

<button type="submit">Save</button>

</form>

</div>

@endsection