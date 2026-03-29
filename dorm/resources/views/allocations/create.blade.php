@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="card">
    <h2>Create New Allocation</h2>

    <form method="POST" action="/allocations">
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label for="student_id">Select Student <span style="color: #e74c3c;">*</span></label>
                <select name="student_id" id="student_id" class="searchable-select" required>
                    <option value="">-- Choose a Student --</option>
                    @foreach($students as $student)
                        <option value="{{ $student->student_id }}">
                            {{ $student->student_number }} - {{ $student->course }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room_id">Select Room <span style="color: #e74c3c;">*</span></label>
                <select name="room_id" id="room_id" class="searchable-select" required>
                    <option value="">-- Choose a Room --</option>
                    @foreach($rooms as $room)
                        <option value="{{ $room->room_id }}">
                            Room {{ $room->room_number }} (Capacity: {{ $room->capacity }})
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date_assigned">Date Assigned <span style="color: #e74c3c;">*</span></label>
                <input type="date" name="date_assigned" id="date_assigned" required>
            </div>

            <div class="form-group">
                <label for="status">Status <span style="color: #e74c3c;">*</span></label>
                <select name="status" id="status" required>
                    <option value="">-- Choose Status --</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>

        <div class="form-row full" style="margin-top: 30px;">
            <div style="display: flex; gap: 15px; justify-content: flex-start;">
                <button type="submit" class="btn btn-success">Save Allocation</button>
                <a href="/allocations" class="btn btn-primary">Cancel</a>
            </div>
        </div>
    </form>
</div>

<script>
$(document).ready(function() {
    $('.searchable-select').select2({
        placeholder: "Search and select...",
        allowClear: true,
        width: '100%',
        containerCssClass: 'select2-container-custom'
    });
});
</script>

@endsection
