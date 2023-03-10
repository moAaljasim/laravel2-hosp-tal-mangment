<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\auth;
use  App\Models\User;
use  App\Models\doctor;
use  App\Models\Appointment;
class HomeController extends Controller
{



    public function redirect() {

        if(Auth::id()){
              
            if(Auth::user()->usertype == '0'){
                $doctor = doctor::all();
                return view ('user.home', compact('doctor'));
    
            }else{
                return view ('admin.home');;

            }
    
        }  return redirect()->back();

    }
    public function index() {
        if(Auth::id())
        {
            return redirect("home");
        }else
        $doctor = doctor::all();
        return view (('user.home'), compact('doctor'));
    }
    public function makeappointment( Request $request){
        $data =new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->specialtys=$request->specialty;
        $data->number=$request->number;
        $data->status='status';
        $data->message=$request->message;
        if(Auth::id()){
            $data->user_id= Auth::user()->id;

        }
        $data->save();
        return redirect()->back();
        
    } 
    public function getmyappointment(){
        $allappointment = Appointment::all();
        return view('user.myappointment',compact('allappointment'));
    }
     public function cancel_appointment($id){

        $data = Appointment::find($id);
       $data->delete();
       return redirect()->back();

     }
   
}
