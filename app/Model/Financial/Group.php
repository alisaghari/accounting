<?php

namespace App\Model\Financial;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];
    protected $table = "financial_accounts";
    const CREATED_AT = "CreateDate";
    const UPDATED_AT = "UpdateDate";

    public function parent(){
        return $this->belongsTo('App\Model\Financial\Group', 'Id', 'ParentId');
    }

    public function childs(){
        return $this->hasMany('App\Model\Financial\Group', "ParentId", "Id");
    }

}
