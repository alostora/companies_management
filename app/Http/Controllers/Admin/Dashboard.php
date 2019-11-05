<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use App\Category;
use App\News;


class Dashboard extends Controller
{
     public function homePage(){
    	
    	$data['users'] = User::All();
    	$data['admins'] = Admin::All();
    	
    	return view('Admin/dashboard',$data);
    }
}
