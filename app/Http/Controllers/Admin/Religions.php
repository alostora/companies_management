<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Religion;

class Religions extends Controller
{



    public function religionInfo(){
    	$data['regilions'] = Religion::paginate(15);
    	return view('Admin/Religion/religionInfo',$data);
    }






    public function viewEditReligion($religionId=false){
    	if($religionId == false){
	    	return view('Admin/Religion/viewEditReligion');
    	}else{
    		$data['regilions'] = Religion::find($religionId);
	    	return view('Admin/Religion/viewEditReligion',$data);
    	}
    }





    public function createRegilion(Request $request){

    	if($request->id != null){
    		Religion::where('id',$request->id)->update(['religionName'=>$request->religionName]);
    	}else{
    		Religion::create(['religionName'=>$request->religionName]);
    	}

    	$request->session()->flash('success','تم التعديل بنجاح');
    	return back();
    }



    public function deleteRegilion(Request $request,$religionId){

    	Religion::where('id',$religionId)->delete();
    	$request->session()->flash('delete','تم الحذف بنجاح');
    	return back();
    }

}
