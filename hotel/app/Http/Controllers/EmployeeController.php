<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = DB::table('employees')->get();
        return view('employee.list', compact('employee'));
    }

    public function showCreateEmployeeForm()
    {
        return view("employee.create");
    }

    public function createEmployee(AllFormRequest $request)
    {
        $employee = [
            [
                'type_of_group' => $request->type_of_group,
                'full_name' => $request->full_name,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number
            ]
        ];

        DB::table('employees')->insert($employee);
        return redirect()->route('list_employee');
    }

    public function deleteEmployee($id)
    {
        DB::table('employees')->delete($id);
        return redirect()->route('list_employee');
    }

    public function showFormUpdate($id)
    {
        $employee = DB::table('employees')->where('id', '=', $id)->get();
        return view('employee.update', compact('employee'));
    }

    public function update(Request $request)
    {
        DB::table('employees')->where('id', $request->id)->update([
            'id' => $request->id,
            'type_of_group' => $request->type_of_group,
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number
        ]);

        return redirect()->route('list_employee');
    }

//    public function find(Request $request)
//    {
//        $search = DB::table('employees')->where('name', 'LIKE', "%".$request->get('')."%")->get();
//        return view('employee.list', compact('search'));
//    }

    public function find(Request $request)
    {
        $search = $request['search'];
        $employee = DB::table('employees')->where('type_of_group', 'LIKE', '%' . $search . '%')
            ->orWhere('gender', 'LIKE', '%' . $search . '%')->get();
        return view('employee.list', compact('employee'));
    }

}
