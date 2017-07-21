<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitcoin extends Model
{
    protected $fillable = ['coin', 'price', 'name'];
    protected $visible = ['coin', 'price', 'name','updated_at'];

    // public function albums()
    // {
    //     return $this->hasMany('App\Album');
    // }
}
