@extends('layouts.app')

@section('content')

<div class="welcome-content">
    <h1>Dorm Allocation System</h1>
    <p>Manage student room allocations efficiently and effectively</p>
</div>

<div class="welcome-card">
    <h2>Quick Actions</h2>
    
    <div style="margin: 40px 0;">
        <a href="/students" class="btn btn-primary" style="display: block; text-align: center; margin-bottom: 15px;">
            View All Students
        </a>
        <a href="/students/create" class="btn btn-success" style="display: block; text-align: center; margin-bottom: 15px;">
            Add New Student
        </a>
        <a href="/allocations" class="btn btn-primary" style="display: block; text-align: center; margin-bottom: 15px;">
            View All Allocations
        </a>
        <a href="/allocations/create" class="btn btn-success" style="display: block; text-align: center;">
            Create New Allocation
        </a>

@endsection