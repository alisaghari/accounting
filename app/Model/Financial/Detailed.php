<?php

namespace App\Model\Financial;

use Illuminate\Database\Eloquent\Model;

class Detailed extends Model
{
    protected $guarded = [];
    protected $table = 'financial_detailed';
    Const CREATED_AT = 'CreateDate';
    const UPDATED_AT = 'UpdateDate';

    public function parent(){
        return $this->belongsTo('App\Model\Financial\Detailed', 'Id', 'ParentId');
    }

    public function childs(){
        return $this->hasMany('App\Model\Financial\Detailed', "ParentId", "Id");
    }
}
