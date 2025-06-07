<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployee(){
        return response()->json(Employee::all(), 200);
    }

    public function getEmployeeById($id){
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        //HTTP 200 = OK
        return response()->json($employee::find($id), 200);
    }

    public function addEmployee(Request $request){
        $employee = Employee::create($request->all());
        //HTTP 201 = Created Success
        return response(201);
    }
}
