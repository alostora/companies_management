<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPartnerInfo extends Model
{
    protected $table = "user_partner_infos";
    protected $fillable = [

        'partnerName',
        'personalCardNumber',
        'relativeRelation',
        'birthDate',
		"user_id",

    ];
}
