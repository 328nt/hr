<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "Member";

    public function departments()
    {
        return $this->belongsTo('App\Department', 'iddepartment', 'id');
    }
}
