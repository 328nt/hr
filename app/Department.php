<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
    protected $table = "department";
    
    public function member()
    {
        return $this->hasMany('App\Member', 'iddepartment', 'id');
    }
}
