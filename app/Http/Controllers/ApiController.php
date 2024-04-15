<?php

namespace App\Http\Controllers;
use App\Department;
use App\Doctor;
use App\Appointment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ApiController extends Controller
{
    function department(){
        $department = Department::select('name','img')->get();
        return response()->json($department);
    }
//  density doctor
    function density_doctor(){
        $doctors =DB::table('users')
        ->join('doctors', function ($join) {
            $join->on('users.id', '=', 'doctors.user_id');})
        ->join('departments', function ($join) {
            $join->on('departments.id', '=', 'doctors.department_id');}
            )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',1)
    ->get();
        return response()->json($doctors);
    }

//  Ear_Nose doctor
function Ear_Nose_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',2)
    ->get();
    return response()->json($doctors);
}

//  Dermatology doctor
function Dermatology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',3)
    ->get();
    return response()->json($doctors);
}

//  Cardology and Vasclar Disease doctor
function Cardology_VasclarDisease_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',4)
    ->get();
    return response()->json($doctors);
}

//  Neurology doctor
function Neurology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',5)
    ->get();
    return response()->json($doctors);
}

//  Psychiatry doctor
function Psychiatry_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',6)
    ->get();
    return response()->json($doctors);
}

//  Orthopedics doctor
function Orthopedics_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',7)
    ->get();
    return response()->json($doctors);
}

//  Audiology doctor
function Audiology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')      
    ->where('departments.id', '=',8)
    ->get();
    return response()->json($doctors);
}

//  Gynaecology doctor
function Gynaecology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',9)
    ->get();
    return response()->json($doctors);
}

//  Pediatrics and Neonatology doctor
function Pediatrics_Neonatology_doctor (){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to')
    ->where('departments.id', '=',10)
    ->get();
    return response()->json($doctors);
}


    /*function doctor($id){
        
        $doctors = DB::table('users')
        ->join('doctors', function ($join) {
            $join->on('users.id', '=', 'doctors.user_id');})
        ->join('departments', function ($join) {
            $join->on('departments.id', '=', 'doctors.department_id');}
            )
        ->select('users.username', 'users.img', 'users.phone','departments.name')
        ->where('departments.id', '=',$id)
        ->get();
        return response()->json($doctors);
    }
    */

    //register
    function register(Request $request){
        $username=$request->username;
        $email=$request->email;
        $password=$request->password;
        //
        $user=new User();
        $user->username=$username;
        $user->email=$email;
        $user->role="patient";
        $user->password=\Hash::make($password);
        $user->access_toke=\Str::random(64);
        $user->save();
       return  response()->json(['access_toke'=>$user->access_toke]);
    }

    //login
    function login(Request $request){
         //validation
        //auth
        $cred=array('email'=>$request->email,
                    'password'=>$request->password);
        //check 
        if(Auth::attempt($cred))
        {
            if(!isset(Auth::user()->access_toke)){
                Auth::user()->access_toke=\Str::random(64);
                Auth::user()->save();
            }
            return response()->json(['id'=>Auth::user()->id,
            'username'=>Auth::user()->username,
            'email'=>Auth::user()->email,
            'phone'=>Auth::user()->phone,
            'age'=>Auth::user()->age,
            'gender'=>Auth::user()->gender,
            'img'=>Auth::user()->img,
            'address'=>Auth::user()->address,
        ]);
           //return response()->json(['access_toke'=>Auth::user()->access_toke]);
        }else{
            //
            return "not valid email or password";
        }
    }

    //book
    function book(Request $request){
        
        $doc_id=$request->doc_id;
        $user_id=$request->user_id;
        $patient_id=$request->patient_id;

        /*$user = DB::table('users')
        ->join('patients', function ($join) {
        $join->on('users.id', '=', 'patients.user_id');})
        ->select('patients.id','patients.user_id')
        ->where('users.access_toke', '=',$access_toke)
        ->get();
*/

       
        $appointment=new Appointment();
        $appointment->user_id=$user_id;
        $appointment->doctor_id=$doc_id;
        $appointment->patient_id=$patient_id;
        $appointment->save();
        
        return response()->json($appointment);
   }


}
