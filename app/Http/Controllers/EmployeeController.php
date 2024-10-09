<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
  


    public function index()
    {

        $employees = Employee::all();
        return view("admin.employee.index")->with('employees',  $employees);

    }



    public function add()
    {

        return view("admin.employee.add");

    }



    public function single()
    {

        return view("admin.employee.single");

    }
    


    public function store(Request $request)
    {


        $request->validate([


            'ename' => 'required|max:50', 
            'email' =>  'required|email',
            'phone' => 'required', 
            'emergencyContact' => 'required', 
            'fatherName' => 'required|max:50',
            'motherName' => 'required|max:50', 
            'Locality' => 'required|max:150',
            'dob' => 'required',
            'nid' => 'required|integer',
            'position' => 'required',
            'gender' => 'required',
            'joiningdate' => 'required',
            'salary' => 'required|integer',
        ]);


        $employee = new Employee();
        $employee->ename = $request->ename; 
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->emergencyContact = $request->emergencyContact;
        $employee->fatherName = $request->fatherName;
        $employee->motherName = $request->motherName;
        $employee->Locality = $request->Locality;
        $employee->dob = $request->dob;
        $employee->nid = $request->nid;
        $employee->position = $request->position;
        $employee->gender = $request->gender;
        $employee->joiningdate = $request->joiningdate;
        $employee->salary = $request->salary;
        $employee->save();


    
        Storage::disk("public")->put("emp/$employee->id", $request->file('image'));
        $employee->image= Storage::disk("public")->files("emp/$employee->id");
        $employee->update();



        return redirect("admin/employee")->with("success", "Employee created.");

    }




    public function update(Request $request,$id)
    {
        $request->validate([


            'ename' => 'required|max:50', 
            'email' =>  'required|email',
            'phone' => 'required', 
            'emergencyContact' => 'required', 
            'fatherName' => 'required|max:50',
            'motherName' => 'required|max:50', 
            'Locality' => 'required|max:150',
            'dob' => 'required',
            'nid' => 'required|integer',
            'position' => 'required',
            'gender' => 'required',
            'joiningdate' => 'required',
            'salary' => 'required|integer',


        ]);



        $employee = Employee::find ($id);
        $employee->ename = $request->ename; 
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->emergencyContact = $request->emergencyContact;
        $employee->fatherName = $request->fatherName;
        $employee->motherName = $request->motherName;
        $employee->Locality = $request->Locality;
        $employee->dob = $request->dob;
        $employee->nid = $request->nid;
        $employee->position = $request->position;
        $employee->gender = $request->gender;
        $employee->joiningdate = $request->joiningdate;
        $employee->salary = $request->salary;
        $employee->update();



        if($request->file('image'))
        {
            Storage::disk("public")->deleteDirectory("emp/$employee->id");
        Storage::disk("public")->put("emp/$employee->id", $request->file('image'));
        }
        $employee->image= Storage::disk("public")->files("emp/$employee->id");
        $employee->update();



        return redirect("admin/employee")->with("success", "Employee updated.");
    }


    
    public function show($id)
    { 

        $employee=Employee::where("id",$id)->firstOrfail();
        return view("admin.employee.single")->with('employee',  $employee);

    }



    public function edit($id)
    {

        $employee=Employee::where("id",$id)->firstOrfail();
        return view("admin.employee.edit")->with('employee',  $employee);

    }




    public function delete(Request $request)
    { 

        Employee::destroy($request->id);
        return redirect()->back()->with('success','Record Successfully Deleted');

    }
    

}