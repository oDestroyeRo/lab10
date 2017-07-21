<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dollar extends Model
{
    protected $fillable = ['coin', 'price', 'name'];
    protected $visible = ['coin', 'price', 'name','updated_at'];
}
