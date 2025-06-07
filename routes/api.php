<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Route::get('employees', 'EmployeeController@getEmployee');

// Get all employees
Route::get('employees', [EmployeeController::class, 'getEmployee']);

// Get specific employee detail
Route::get('employees/{id}', [EmployeeController::class, 'getEmployeeById']);

// Add Employee
Route::post('addEmployee', [EmployeeController::class, 'addEmployee']);

// Update Employee
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

// Delete Employee
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);