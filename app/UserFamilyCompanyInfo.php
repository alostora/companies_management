<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFamilyCompanyInfo extends Model
{


	protected $table = "user_family_company_infos";
    protected $fillable = [

    	"name",
    	"relativeRelation",
    	"mobile",
    	"user_id",

    ];
    
}
