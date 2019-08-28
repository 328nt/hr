<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function catalog()
    {
        return $this->belongsTo('App\Catalog', 'idcatalog', 'id');
    }
}
