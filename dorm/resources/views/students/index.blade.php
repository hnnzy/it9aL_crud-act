@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Students</h2>

    <a href="/students/create" class="btn btn-success">
        Add New Student
    </a>

    @if($students->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Student Number</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td><strong>{{ $student->student_number }}</strong></td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <span class="badge badge-info">Year {{ $student->year_level }}</span>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="/students/{{ $student->student_id }}/edit" class="btn btn-warning btn-small">
                                    Edit
                                </a>
                                <form action="/students/{{ $student->student_id }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-small">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div style="text-align: center; padding: 60px 20px;">
            <p style="font-size: 18px; color: #666; margin-bottom: 30px;">No students found. Add your first student!</p>
            <a href="/students/create" class="btn btn-primary">
                Add First Student
            </a>
        </div>
    @endif

</div>

@endsection
