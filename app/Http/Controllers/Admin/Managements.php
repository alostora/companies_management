<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Management;
use App\Http\Requests\Managements\ManagementCreate;

class Managements extends Controller
{
    

    public function managementInfo(){
    	$data['managements'] = Management::with('jobInfo')->orderBy('id','ASC')->paginate(15);

    	return view('Admin/Management/managementInfo',$data);
    }



    public function viewCreateManagement($manageId=false){
    	if ($manageId != false) {
    		$data['management'] = Management::find($manageId);
    		return view('Admin/Management/viewCreateManagement',$data);
    	}else{
    		return view('Admin/Management/viewCreateManagement');
    	}

    }




    public function createManagement(ManagementCreate $request){

    	$managementName = mb_substr($request->managementName, 0, 2, "UTF-8");
    	$type = $request->type == "category"?true:false;
        
    	if ($request->id != null) {
    		Management::where('id',$request->id)->update([
    			"managementName" => $request->managementName,
    			"managementCode" => $managementName,
		    	"managementRule" => $request->managementRule,
		    	"mainManagement" => $request->mainManagement,
                "isCategory"     => $type,
    		]);
    		$request->session()->flash('success','management has been updated');
    		return back();
    	}else{
    		Management::create([
    			"managementName" => $request->managementName,
		    	"managementCode" => $managementName,
		    	"managementRule" => $request->managementRule,
		    	"mainManagement" => $request->mainManagement,
                "isCategory"     => $type,
    		]);
    		$request->session()->flash('success','management has been added');
    		return back();
    	}
    }



    public function deleteManagement(Request $request,$manageId=false){
    	$management = Management::find($manageId);
    	if(!empty($management)){
    		Management::where('id',$manageId)->delete();
    	}

    	$request->session()->flash('delete','management has been deleted');
    		return back();
    }



}
