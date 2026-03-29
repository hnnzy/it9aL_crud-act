<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allocation;
use App\Models\Student;
use App\Models\Room;

class AllocationController extends Controller
{
    public function index()
    {
        $allocations = Allocation::with('student', 'room')->get();
        return view('allocations.index', compact('allocations'));
    }

    public function create()
    {
        $students = Student::all();
        $rooms = Room::all();

        return view('allocations.create', compact('students','rooms'));
    }

    public function store(Request $request)
    {
        Allocation::create($request->all());
        return redirect('/allocations');
    }

    public function edit($id)
    {
        $allocation = Allocation::find($id);
        $students = Student::all();
        $rooms = Room::all();

        return view('allocations.edit', compact('allocation','students','rooms'));
    }

    public function update(Request $request, $id)
    {
        $allocation = Allocation::find($id);
        $allocation->update($request->all());

        return redirect('/allocations');
    }

    public function destroy($id)
    {
        Allocation::destroy($id);
        return redirect('/allocations');
    }
}
