<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function _construct()
    {
        $this->middleware['auth'];
    }

    public function index(){
        return view('backend.employee.add_employee');
    }

    public function show_employee(){
        $employees = Employee::all();
        return view('backend.employee.all_employee', compact('employees'));
    }

    public function delete_employee($id){
        Employee::findOrFail($id)->delete(); 
        return redirect()->back();  
     }

    //--Insert Employee Start--
    public function store(Request $request){
        $data=array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['experience'] = $request->experience;
        $data['salary'] = $request->salary;
        $data['vacation'] = $request->vacation;
        $data['city'] = $request->city;
        $image = $request->file('photo');

        if($image){
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/employee/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success){
                $data['photo'] = $image_url;
                $employee = DB::table('employees')->insert($data);

                if($employee){
                    // $notification=array(
                    //     'message' => 'Successfully Employee Inserted',
                    //     'alert-type' => 'success',
                    // );

                return redirect()->route('all.employee')->withSuccess('Success! User created');;

                }else{
                    $notification=array(
                        'message'=>'error',
                        'alert-type'=>'success',
                    );

                   return redirect()->back()->with($notification);
                }
            }else{
                   return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }

    }
    
   //--Insert Employee End--

}
