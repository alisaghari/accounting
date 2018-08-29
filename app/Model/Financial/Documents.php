<?php

namespace App\Model\Financial;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $guarded = [];
    const CREATED_AT = 'CreateDate';
    const UPDATED_AT = 'UpdateDate';
    protected $table = 'financial_documents';
}
