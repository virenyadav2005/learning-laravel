<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Registration;
use Hash;

class RegisterController extends Controller
{
    public function index(){
        // dd(Hash::make(123456));
        $url = url('/register');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('formData')->with($data);
    }

    
        public function register(Request $request){

            $request->validate([
                            'FullName' => 'required',
                            'userName' => 'required|unique:registration',
                            'email' => 'required|email',
                            'password' => 'required',
                            'confirmPassword' => 'required|same:password',   
                     ]);
           $registration = new Registration;
           $registration->FullName= $request->FullName;
           $registration->email = $request->email;   
           $registration->username=$request->userName;
           $registration->password =md5($request ->password);
           $registration->Dob = $request->Dob;
           $registration->gender = $request->gender;
           $registration -> country =$request->country;
           $registration -> PhnNo = $request->PhnNo;
           

           $registration->save();

           return redirect('/register/view');

        }

        public function  printData(){
             $RegisterData = Registration::all();
       
              $data = compact('RegisterData');
             return view('registration_data')->with($data);
        }

        public function deleteData($id){
           $data = Registration::find($id);
           if(!is_null($data)){
            $data->delete();
           }
           return redirect('/register/view');
        }

        public function edits($id){
            $data = Registration::find($id);
            if(is_null($data)){
                return redirect('/register/view');
            }
            else{

                $url = url('/register/update')."/".$id;
                $title = "Update Customer Details";

                $dataEdit = compact('data','url','title');
                return view('formData')->with($dataEdit);
            }


        }


        public function update($id ,Request $request ){
            $data = Registration::find($id);
            $data->FullName= $request->FullName;
            $data->email = $request->email;   
            $data->username=$request->userName;
            $data->Dob = $request->Dob;
            $data->gender = $request->gender;
            $data -> country =$request->country;
            $data -> PhnNo = $request->PhnNo;
            $data->save();
            return redirect('/register/view');
        }
    
};
