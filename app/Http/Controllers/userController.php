<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function index(){

        $customers=User::latest()->paginate(7);
      // return view('layouts.admin.user.index',compact('users'))->with('i',(request()->input('page',1) - 1)*10);
       // $users=User::all();
        return view('layouts.admin.user.index',compact('customers'));
    }
    public function create(){
        return view('layouts.admin.user.adduser');
    }
    public function store(Request $request){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed'],
                'address' => ['required','max:255'],
                'gender' => ['required'],
                'dob' => ['required'],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address'=> $request->address,
                'status' =>$request->status,
                'gender'=>$request->gender,
                'dob' => $request->dob,
                
            ]);
           // return redirect('admin/users');
            return redirect('admin/users')->with('success','User Inserted Successfully');
    
    }
    public function destroy($id){
        $user=User::findorFail($id);
        if(!is_null($user)){
           $user->delete();
        }
        return redirect()->back();
    }
}
