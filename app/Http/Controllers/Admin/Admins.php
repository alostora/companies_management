<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use App\Admin;
use Auth;
use App\Events\Eventnotfii;


class Admins extends Controller
{
    
    public function doLogin(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|max:40',
            'password' => 'required|max:255',
        ]);


        if($validator->fails()){
            return redirect('admin/login')->withErrors($validator)->withInput();
        }

		$rememberme = $request->input('rememberme') ==1?true:false;
		if(Auth::guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$rememberme)){
			return redirect('admin');
		}else{
	        $request->session()->flash('fails','wrong password or email');
			return redirect('admin/login');
    	}

    }



    
    public function adminInfo(Request $request){
        $admins = Admin::orderBy('id','DESC')->paginate(15);
        return view('Admin/Admin/adminInfo',['admins'=>$admins]);
    }



    public function viewCreateAdmin(){

        return view('Admin/Admin/viewCreateAdmin');
    }


    public function createAdmin(Request $request){


        $validator = Validator::make($request->all(), [
                    'name' => 'required|unique:admins,name|max:30',
                    'email' => 'required|unique:admins,email',
                    'password' => 'required',
                    'confirmPassword' => 'required|same:password',
                    'status' => 'required',
                    'country' => 'required',
                ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

            $admin = Admin::Create([
                'name'=>Request('name'),
                'email'=>Request('email'),
                'status'=>(int)Request('status'),
                'country'=>Request('country'),
                'password'=>Hash::make(Request('password')),
            ]);


            //report action
            $info['action'] = "Add Admin";
            $info['actionBy'] = Auth::guard('admin')->user()->name;
            $info['actionContent'] = "admin: " . $admin->name . " has been add";
            $info['reportStatus'] = $admin->id;
            event(new Eventnotfii($info));


            $request->session()->flash('success','admin has been add');
            return redirect('admin/adminInfo');
       
    }




    public function viewEditAdmin(Request $request,$adminId=fals){

        $admins = Admin::where('id',$adminId)->first();
        return view('Admin/Admin/viewEditAdmin',['admins'=>$admins]);
    }


    public function editAdmin(Request $request){

        $admin = Admin::find(Request('id'));
        Admin::where('id',Request('id'))
        ->update(['name'=>'','email'=>'']);

        $validator = Validator::make($request->all(),[
                    'id' => 'required',
                    'name' => 'required|unique:admins|max:30',
                    'email' => 'required|unique:admins',
                    'status' => 'required',
                    'country' => 'required',
                    'password' => 'required',
                    'confirmPassword' => 'required|same:password',
        ]);

        if($validator->fails()){
            Admin::where('id',Request('id'))
            ->update(['name'=>$admin->name,'email'=>$admin->email]);
            return back()->withErrors($validator)->withInput();
        }

        $admins = Admin::where('id',Request('id'))->
            update([
                'name'=>Request('name'),
                'email'=>Request('email'),
                'status'=>(int)Request('status'),
                'country'=>Request('country'),
                'password'=>Hash::make(Request('password')),
            ]);



            //report action
            $info['action'] = "Edite Admin";
            $info['actionBy'] = Auth::guard('admin')->user()->name;
            $info['actionContent'] = "admin: " . Request('name') . " has been edited";
            $info['reportStatus'] = Request('id');
            event(new Eventnotfii($info));

        $request->session()->flash('success','admin has been edited');    
        return redirect('admin/adminInfo');
    }



    public function deleteAdmin(Request $request,$adminId=false){
        $admin = Admin::find($adminId);
        if(!empty(Admin::find($adminId))){
            Admin::where('id',$adminId)->delete();

            //report action
            $info['action'] = "delete admin";
            $info['actionBy'] = Auth::guard('admin')->user()->name;
            $info['actionContent'] = "admin: " . $admin->name . " has been deleted";
            $info['reportStatus'] = $adminId;
            event(new Eventnotfii($info));

            $request->session()->flash('delete','admin has been deleted');
            return back();
        }else{
            $request->session()->flash('delete','admin not found');
            return back(); 
        }
    }








     public function logOut(){
        auth()->guard('admin')->logout();

        return redirect('admin/login');
    }






}
