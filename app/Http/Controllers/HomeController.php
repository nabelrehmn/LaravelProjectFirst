<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    Public function formpage(){
        return view('frontend.enrollment');
    }

    public function enroll(Request $req){

        $req->validate([
            'F_Name' => 'required | min: 3 | max: 8',
            'L_Name' => 'required | min: 3 | max: 8',
            'S_Email' => 'required',
            'Password' => 'required | max: 8',
            'Repassword' => 'required | same:Password'
        ],
        [   
            'required' => 'Please fill the required field',
            'min' => 'Please use Minimum 3 characters',
            'max' => 'Please use maxime 8 characters',
        ]);

        if($req->img){
            foreach($req->img as $item){

                $myimg = $item;
                
                $imagename = $myimg->getClientOriginalName();
                $imagename = Str::random(5)."__".$imagename;
                
                $myimg->move("public/formimage/",$imagename);
            }
        }

        $fname = $req->F_Name;
        $lname = $req->L_Name;
        $email = $req->S_Email;
        $gender = $req->S_Gender;
        $action = $req->S_Status;
        $pass = $req->Password;
        $repass = $req->Repassword;

        return view('frontend.storeenrollments',compact('fname','lname','email','gender','action','pass','repass'));

        // ______ echo to check data ______ //
            // Print_r($req->toArray()); //

        //     $fname = $req->F_Name;
        //     $lname = $req->L_Name;
        //     $email = $req->S_Email;
        //     $gender = $req->S_Gender;
        //     $status = $req->S_Status;


        // return view('frontend.storeenrollments',compact('fname','lname','email','gender','status'));
    }
}

