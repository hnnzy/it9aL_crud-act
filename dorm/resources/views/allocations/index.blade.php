@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Room Allocations</h2>

    <a href="/allocations/create" class="btn btn-success">
        Add New Allocation
    </a>

    @if($allocations->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Room</th>
                    <th>Date Assigned</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allocations as $allocation)
                    <tr>
                        <td><strong>#{{ $allocation->id }}</strong></td>
                        <td>
                            {{ $allocation->student->student_number ?? 'N/A' }}
                        </td>
                        <td>
                            {{ $allocation->student->course ?? 'N/A' }}
                        </td>
                        <td>
                            <strong>Room {{ $allocation->room->room_number ?? 'N/A' }}</strong>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($allocation->date_assigned)->format('M d, Y') ?? 'N/A' }}</td>
                        <td>
                            @if($allocation->status === 'active')
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="actions">
                                <a href="/allocations/{{ $allocation->id }}/edit" class="btn btn-warning btn-small">
                                    Edit
                                </a>
                                <form action="/allocations/{{ $allocation->id }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this allocation?');">
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
            <p style="font-size: 18px; color: #666; margin-bottom: 30px;">No allocations found. Start by creating a new one!</p>
            <a href="/allocations/create" class="btn btn-primary">
                Create First Allocation
            </a>
        </div>
    @endif

</div>

@endsection