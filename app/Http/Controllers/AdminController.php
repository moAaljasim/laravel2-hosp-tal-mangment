<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\auth;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview() {
        return view ('admin.add_doctor');
    }
    public function upload(Request $request){
        $doctor = new doctor;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename; 


        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->specialty = $request->speciality;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added successfuly');
    }
     public function getDoctorAppointments(){ 
        $allDoctorAppointments = Appointment::all() ;
        return view('admin.doctor_appointments',compact('allDoctorAppointments') );
     }

     public function approveAppointment($id){
        $data = Appointment::find($id);
        $data->status ="approved";
        $data->save();
        return redirect()->back();

     }
     public function cancelAppointment($id){
        $data = Appointment::find($id);
        $data->status ="canceled";
        $data->save();
        return redirect()->back();

     }
     public function showallDoctor(){
        $allDoctors =  Doctor::all();
        return view('admin.allDoctor',compact('allDoctors'));
     }
     public function deleteDoctor($id){
         $data =  Doctor::find($id);
         $data->delete();
         return redirect()->back();
     }
      public function updateDoctor($id){
        $data =  Doctor::find($id);
        return view('admin.updateDoctor',compact('data'));
      }
      public function editdoctor(request $request ,$id){
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->specialty = $request->specialty;
        $doctor->room = $request->room;
        $image = $request->file;
        if($image){
            
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('doctorimage',$imagename);
            $doctor->image=$imagename; 
        }
      
        $doctor->save();
        return redirect()->back();

      }
}
