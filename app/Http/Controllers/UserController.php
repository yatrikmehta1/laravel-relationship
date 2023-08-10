<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class UserController extends Controller
{
    public function index()
{
    $users = Employee::with('company')->select('name', 'company_id', 'image')->get(); //eager load

    return view('users.index', compact('users'));
}
}
