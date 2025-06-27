<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $employees = Employee::with('tags')->get();

        return response()->json([
            'status' => true,
            'data' => $employees
        ]);
    }

    public function show($id)
    {
        $employee = Employee::with('tags')->find($id);

        if (!$employee) {
            return response()->json([
                'status' => false,
                'message' => 'Employé non trouvé'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $employee
        ]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
