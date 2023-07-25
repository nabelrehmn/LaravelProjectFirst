<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\getClientOriginalName;

class StudentController extends Controller
{
    // Route View Page For Crud Page
    public function index(){
        $student = Student::all();
        return view('students.index', compact('student'));
    }

    // Route View For Insert Page
    public function insert(){
        return view('students.insert');
    }

    // Insert Work For Page With Validation And Image
    public function store(Request $req ){
        $req->validate([
            'Fname' => 'required | max: 8 | min: 3',
            'Lname' => 'required | max: 8 | min: 3',
            'Email' => 'required | email | unique:students',
            'Image' =>  'image'
        ],
        [
            'required' => 'Please fill the required field',
            'min' => 'Please use minimum 3 characters',
            'max' => 'Please use maxime 8 characters',
            'image' => 'Please select image'
        ]);

        $myimg = $req->Image;
        $imgname = $myimg->getClientOriginalName();
        $imgname = Str::random(5)."__".$imgname;
        $myimg->move("public/student/images/",$imgname);

        $std = new Student();
        $std->first_name = $req->Fname;
        $std->last_name = $req->Lname;
        $std->gender = $req->Gender;
        $std->email = $req->Email;
        $std->img = $imgname;
        $std->status = $req->Status;
        $std->save();

        return redirect('/dashboard/students-list');
    }

    // Route View For Edit Page 
    public function edit($id){
        $std = Student::find($id);

        if($std){
            return view("students.edit",compact("std"));
        }

        return redirect('/dashboard/students-list');
    }

    // Update Page Work With Validation And Image Update
    public function update(Request $req,$id){
        $std = Student::find($id);

        $req->validate([
            'Fname' => 'required | min: 3 | max: 8',
            'Lname' => 'required | min: 3 | max: 8',
            'Email' => 'required | email | unique:students',
        ],
        [
            'required' => 'Please fill the require field',
            'min' => 'Please use minimum 3 characters',
            'max' => 'Pleae use maximum 8 chareacters',
        ]);

        if($req->Image){
            $myimg = $req->Image;
            $imagename = $myimg->getClientOriginalName();
            $imagename = Str::random(5)."__".$imagename;
            $myimg->move("public/student/images/",$imagename);
            unlink("public/student/images/".$std->img);

        }
            else{
                $imagename = $req->Oldimage;
        }

        if($std){
            $std->first_name = $req->Fname;
            $std->last_name = $req->Lname;
            $std->gender = $req->Gender;
            $std->email = $req->Email;
            $std->img = $imagename;
            $std->status = $req->Status;
            $std->save();
            
            return redirect('/dashboard/students-list');
        }

        return redirect()->back();    
    }

    // Delete Method Work
    public function delete($id){
        $std = Student::find($id);

        if($std){
            $std->delete();
            unlink('public/student/images/'.$std->img);

            return redirect('/dashboard/students-list');
        }

        return redirect()->back();
    }
}
