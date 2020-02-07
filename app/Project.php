<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false; //as by default timestamp is demanded, we are turning it off as we dont need it plus it'll conserve DB space
    //
}
