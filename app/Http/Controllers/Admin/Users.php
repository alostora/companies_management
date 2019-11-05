<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use File;
use App\Http\Requests\Users\UserssEdits;
use App\Http\Requests\Users\UserssCreate;
use App\Http\Requests\AboutSite\AbouteSiteEdite;
use App\Http\Requests\AboutSite\AbouteSiteCreate;
use Carbon\Carbon;
use App\Events\Eventnotfii;
use Auth;
use App\User;
use App\AboutSite;
use App\Gallary;
use App\Category;



class Users extends Controller
{


    public function userInfo(Request $request){

        $users = User::orderBy('id','DESC')->paginate(15);
        if(!empty($users)){
            return view('Admin/User/userInfo',['users'=>$users]);
        }else{
            return back();
        }

    }



    public function viewCreateUser(){
        return view('Admin/User/viewCreateUser');
    }




    public function createUser(UserssCreate $request){


        $user = User::Create([
            'name'=>Request('name'),
            'email'=>Request('email'),
            'password'=>Hash::make(Request('password')),
            'pack_id'=>Request('pack_id'),
        ]);

        

        $request->session()->flash('success','user has been add');
        return back();

       
    }




    public function viewEditUser(Request $request,$userId=fals){
        $data['users'] = User::where('id',$userId)->first();
        return view('Admin/User/viewEditUser',$data);
    }




    public function editUser(UserssEdits $request){


        User::where('id',Request('id'))->update([
            'name'=>Request('name'),
            'email'=>Request('email'),
            'password'=>Hash::make(Request('password')),
            'pack_id'=>Request('pack_id'),
        ]);



        $request->session()->flash('success','user has been edited');
        return back();

    }





    public function deleteUser(Request $request,$userId=false){
        $user = User::find($userId);
        if(!empty($user)){

            User::where('id',$userId)->delete();
            $request->session()->flash('delete','user has been deleted');

            return back();
        }else{
            $request->session()->flash('delete','user not found');
            return back(); 
        }
    }






}
