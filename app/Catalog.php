<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public function news()
    {
        return $this->hasMany('App\News', 'idcatalog', 'id');
    }
}
