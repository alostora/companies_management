<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Condition;

class Conditions extends Controller
{
    



    public function conditionsInfo(){
    	$data['conditions'] = Condition::paginate(15);
    	return view('Admin/Condition/conditionsInfo',$data);
    }






    public function viewEditCondition($conditionId=false){
    	if($conditionId == false){
	    	return view('Admin/Condition/viewEditCondition');
    	}else{
    		$data['conditions'] = Condition::find($conditionId);
	    	return view('Admin/Condition/viewEditCondition',$data);
    	}
    }





    public function createCondition(Request $request){
        if ($request->conditions == null) {
            return back()->withErrors(['errors'=>'الشروط والاحكام مطلوبة']);
        }
    	if($request->id != null){
    		Condition::where('id',$request->id)->update(['conditions'=>$request->conditions]);
    	}else{
    		Condition::create(['conditions'=>$request->conditions]);
    	}

    	$request->session()->flash('success','تم التعديل بنجاح');
    	return back();
    }



    public function deleteRegilion(Request $request,$conditionId){

    	Condition::where('id',$conditionId)->delete();
    	$request->session()->flash('delete','تم الحذف بنجاح');
    	return back();
    }




}
