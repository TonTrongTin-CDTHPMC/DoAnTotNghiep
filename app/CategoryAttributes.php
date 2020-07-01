<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CategoryAttributes extends Model
{
    use SoftDeletes;

    protected $table ='category_attributes';
    
    protected $dates = ['deleted_at'];
}
