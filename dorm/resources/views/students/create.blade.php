@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Add New Student</h2>

    <form method="POST" action="/students">
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label for="student_number">Student Number <span style="color: #e74c3c;">*</span></label>
                <input type="text" name="student_number" id="student_number" placeholder="e.g., S001" required>
                @error('student_number')
                    <span style="color: #e74c3c; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="course">Course <span style="color: #e74c3c;">*</span></label>
                <input type="text" name="course" id="course" placeholder="e.g., Bachelor of Science in Computer Science" required>
                @error('course')
                    <span style="color: #e74c3c; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="year_level">Year Level <span style="color: #e74c3c;">*</span></label>
                <select name="year_level" id="year_level" required>
                    <option value="">-- Select Year Level --</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
                @error('year_level')
                    <span style="color: #e74c3c; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-row full" style="margin-top: 30px;">
            <div style="display: flex; gap: 15px; justify-content: flex-start;">
                <button type="submit" class="btn btn-success">Save Student</button>
                <a href="/students" class="btn btn-primary">Cancel</a>
            </div>
        </div>
    </form>
</div>

@endsection
