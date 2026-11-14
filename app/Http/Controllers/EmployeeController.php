<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function create(Request $req){
        Employees::create([
            'emp_name' => $req->emp_name,
            'emp_email' => $req->emp_email,
            'emp_code' => $req->emp_code
        ]);

        return view("Employees.read");
    }
}
