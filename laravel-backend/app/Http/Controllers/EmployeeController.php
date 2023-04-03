<?php

namespace App\Http\Controllers;

use App\Models\Emplyee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $employees = Emplyee::all();

        return response()->json($employees);
    }

    public function store(Request $request)
    {

        $employees = new Emplyee([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile'),
        ]);
        $employees->save();

        return response()->json('Employee created!');
    }

    public function show($id)
    {
        $contact = Emplyee::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $employees = Emplyee::find($id);
       $employees->update($request->all());
       return response()->json('Employee updated');
    }

    public function destroy($id)
    {
        $employees = Emplyee::find($id);
        $employees->delete();
        return response()->json(' deleted!');
    }
}
